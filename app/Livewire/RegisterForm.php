<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\HomePage;
use Livewire\Attributes\Validate;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Honeypot\Http\Livewire\Concerns\HoneypotData;
use Spatie\Honeypot\Http\Livewire\Concerns\UsesSpamProtection;
use Illuminate\Validation\Rules;

class RegisterForm extends Component
{
    use UsesSpamProtection;

    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $phone = '';
    public string $role = 'client';
    public string $lang = '';
    public string $password_confirmation = '';

    public HoneypotData $extraFields;
    
    public function mount()
    {
        $this->extraFields = new HoneypotData();
    }

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['nullable', 'string', 'max:10'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'max:15'],
            'lang' => ['required', 'string', 'max:10'],
        ]);

        $this->protectAgainstSpam();

        $validated['password'] = Hash::make($validated['password']);

        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->phone = $validated['phone'];
        $user->password = $validated['password'];
        $user->role = $validated['role'];
        $user->lang = $validated['lang'];
        $user->save();

        event(new Registered( $user ));

        Auth::login($user);

        $this->redirect(HomePage::class, navigate: true);

    }


    public function render()
    {
        return view('components.register-form');
    }
}
