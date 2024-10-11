<style>
    body {
        background-image: url('https://i.pinimg.com/564x/3a/48/55/3a485576f4790764f776f7edf90fa0c5.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
    }

    .register-container {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        width: 350px;
        text-align: left;
    }

    .register-container img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        margin-bottom: 1rem;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .register-container input {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 12px;
        font-size: 16px;
        width: 100%;
        margin-top: 5px;
        transition: border-color 0.3s;
    }

    .register-container input:focus {
        border-color: #4a90e2;
        outline: none;
        box-shadow: 0 0 5px rgba(74, 144, 226, 0.5);
    }

    .register-container label {
        font-weight: bold;
        margin-bottom: 5px;
        color: #333;
        font-size: 16px;
    }

    .primary-button {
        background-color: #4a90e2;
        color: white;
        padding: 12px;
        margin-top: 20px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
        transition: background-color 0.3s, transform 0.2s;
    }

    .primary-button:hover {
        background-color: #357ab8;
        transform: translateY(-2px);
    }

    .primary-button:active {
        transform: translateY(0);
    }

    .forgot-password {
        margin-top: 10px;
        font-size: 14px;
        color: #666;
    }
</style>

<div class="register-container">
    <img src="https://i.pinimg.com/564x/01/00/b5/0100b5281250e91d7314a39a6432df9d.jpg" alt="Logo">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1" type="password" name="password_confirmation"
                required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button type="submit" class="primary-button">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>
