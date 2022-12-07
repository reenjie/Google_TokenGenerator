

<div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        <h3>Generate Token</h3>
                                        <p>Once you click on below button it will redirect you to Google Account for select. Returned that with Token. If refresh Token Not found then please click Generate Token Button to grab token instead.</p>
                                    </div>
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm flex justify-between">
                                        <form action="{{ route('generate.token') }}" method="post" class="mr-2">
                                            @csrf
                                            <button type="submit" class="cursor p-2 px-6 bg-gray-900 text-gray-600 font-semibold">Generate Token</button>
                                        </form>
                                       
                                    </div>
                                    @if ( session()->has('error') || session()->has('token') )
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        <h4 style="margin-bottom: 5px;">Token</h4>
                                        @if ( session()->has('error') )
                                        <p class="font-semibold">{{ session()->get('error') }}</p>
                                        @endif
                                    
                                        @if ( session()->has('token') )
                                        <p class="font-semibold" style="font-size:16px; margin: 0px;">{{ session()->get('token') }}</p>
                                        @endif
                                    </div>
                                    @endif
                                    
                                    @if ( session()->has('success') )
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        <p class="font-semibold">{{ session()->get('success') }}</p>
                                    </div>
                                    @endif
