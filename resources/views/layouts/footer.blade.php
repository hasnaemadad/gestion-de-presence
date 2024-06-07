<footer class="border-t border-gray-100 bg-white dark:border-gray-700/70 dark:bg-gray-800">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 md:px-8 lg:py-8">
        <div class="md:flex md:items-start md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="/" class="flex items-center">
                    <x-application-logo class="dark:text-primary w-24 fill-current text-gray-800" />
                </a>
            </div>
            
        </div>
        <hr class="my-6 border-gray-200 dark:border-gray-700 sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 dark:text-gray-400 sm:text-center">© <span
                    x-text="new Date().toISOString().split('T')[0]?.split('-')?.at(0)"></span> · All Rights Reserved.
            </span>
           
        </div>
    </div>
</footer>
