 <form action="{{ route('password.email') }}" method="POST">
                            @csrf
                            <div class="p-[3rem]">
                                <div class="flex items-center justify-center mb-3">
                                    <span class="auth-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="password">
                                            <path fill="#6446fe"
                                                d="M59,8H5A1,1,0,0,0,4,9V55a1,1,0,0,0,1,1H59a1,1,0,0,0,1-1V9A1,1,0,0,0,59,8ZM58,54H6V10H58Z"
                                                class="color1d1f47 svgShape"></path>
                                            <path fill="#6446fe"
                                                d="M36,35H28a3,3,0,0,1-3-3V27a3,3,0,0,1,3-3h8a3,3,0,0,1,3,3v5A3,3,0,0,1,36,35Zm-8-9a1,1,0,0,0-1,1v5a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1V27a1,1,0,0,0-1-1Z"
                                                class="color0055ff svgShape"></path>
                                            <path fill="#6446fe"
                                                d="M36 26H28a1 1 0 0 1-1-1V24a5 5 0 0 1 10 0v1A1 1 0 0 1 36 26zm-7-2h6a3 3 0 0 0-6 0zM32 31a1 1 0 0 1-1-1V29a1 1 0 0 1 2 0v1A1 1 0 0 1 32 31z"
                                                class="color0055ff svgShape"></path>
                                            <path fill="#6446fe"
                                                d="M59 8H5A1 1 0 0 0 4 9v8a1 1 0 0 0 1 1H20.08a1 1 0 0 0 .63-.22L25.36 14H59a1 1 0 0 0 1-1V9A1 1 0 0 0 59 8zm-1 4H25l-.21 0a1.09 1.09 0 0 0-.42.2L19.73 16H6V10H58zM50 49H14a1 1 0 0 1-1-1V39a1 1 0 0 1 1-1H50a1 1 0 0 1 1 1v9A1 1 0 0 1 50 49zM15 47H49V40H15z"
                                                class="color1d1f47 svgShape"></path>
                                            <circle cx="19.5" cy="43.5" r="1.5" fill="#6446fe"
                                                class="color0055ff svgShape"></circle>
                                            <circle cx="24.5" cy="43.5" r="1.5" fill="#6446fe"
                                                class="color0055ff svgShape"></circle>
                                            <circle cx="29.5" cy="43.5" r="1.5" fill="#6446fe"
                                                class="color0055ff svgShape"></circle>
                                            <circle cx="34.5" cy="43.5" r="1.5" fill="#6446fe"
                                                class="color0055ff svgShape"></circle>
                                            <circle cx="39.5" cy="43.5" r="1.5" fill="#6446fe"
                                                class="color0055ff svgShape"></circle>
                                            <circle cx="44.5" cy="43.5" r="1.5" fill="#6446fe"
                                                class="color0055ff svgShape"></circle>
                                            <path fill="#6446fe"
                                                d="M60 9a1 1 0 0 0-1-1H28.81l2.37-2.37A19.22 19.22 0 0 1 60 31zM35.19 56l-2.37 2.37A19.22 19.22 0 0 1 4 33V55a1 1 0 0 0 1 1z"
                                                opacity=".3" class="color0055ff svgShape"></path>
                                        </svg>
                                    </span>
                                </div>
                                <p class="h4 !font-semibold !mb-0 text-center">Forgot Password</p>
                                <p class="!mb-3 text-textmuted dark:text-textmuted/50  font-normal text-center">One step to
                                    reset your password!</p>

                                @include('layouts.alert')

                                <div class="grid grid-cols-12 gap-y-3">
                                    <div class="xl:col-span-12 col-span-12">
                                        <label for="signup-firstname" class="ti-form-label text-dark">Email</label>
                                        <div class="relative">
                                            <input type="text"
                                                class="form-control form-control-lg @error('email') invalid @enderror"
                                                id="email" placeholder="Enter email" name="email"
                                                value="{{ old('email') }}">
                                        </div>
                                        @error('email')
                                            <small class="validation-error">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>

                                </div>

                                <div class="grid mt-4">
                                    <button type="submit" class="ti-btn ti-btn-primary ti-btn-lg">Send Password Reset
                                        Link</button>
                                </div>
                                <div class="text-center mb-0">
                                    <p class="text-textmuted dark:text-textmuted/50 mt-3 mb-0">Already have credentials? <a
                                            href="{{ route('login') }}" class="text-primary">Sign In</a></p>
                                </div>
                            </div>
                        </form>
