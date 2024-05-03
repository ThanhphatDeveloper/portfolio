<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PlugAuth - Tailwind CSS AUth Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured Tailwind CSS AUth Page Template." name="description" />
    <meta content="MyraStudio" name="author" />
    <link rel="shortcut icon" href="assets/backend/images/favicon.ico">
    <link href="assets/backend/css/tailwind.css" rel="stylesheet" type="text/css" />
</head>

<body class="h-screen w-screen flex justify-center items-center bg-[url('../images/bg-auth.jpg')] relative bg-cover bg-top after:absolute after:inset-0 after:bg-black/50 after:-z-10">
    <div class="xl:w-1/2 md:w-3/4 w-full m-8 whitespace-nowrap">
        <div class="flex bg-white overflow-hidden rounded-xl">
            <div class="w-1/2 lg:block hidden p-2">
                <img src="assets/backend/images/bg-auth-2.png" alt="" class="h-full w-full rounded-xl">
            </div>
            <div class="lg:w-1/2 w-full">
                <div class="px-6 py-8">
                    <div class="flex justify-between items-start">
                        <h5 class="text-xl font-bold text-gray-700 mb-6">Logout</h5>

                        <a href="#" class="flex mb-6">
                            <span class="font-extrabold text-2xl first-letter:text-sky-500 tracking-wider">Plug<span class="text-sky-500">.</span>Auth</span>
                        </a>
                    </div>

                    <div class="mt-4 pt-2">
                        <h5 class="text-gray-800 font-semibold mb-8 text-xl">You are Logged Out</h5>
                        <p class="text-gray-800 font-semibold mb-6 text-base">Thank you for using Plug.Auth</p>
                    </div>


                    <div class="flex justify-center mb-6">
                        <a href="auth-login.html" class="inline-flex items-center justify-center rounded py-1.5 px-3 text-sm font-semibold transition-all w-full text-white bg-sky-500"> Log In </a>
                    </div>
   
                    <div class="flex items-center my-6">
                        <div class="flex-auto mt-px border-t border-dashed border-gray-200"></div>
                        <div class="mx-4 text-secondary">Or</div>
                        <div class="flex-auto mt-px border-t border-dashed border-gray-200"></div>
                    </div>

                    <p class="text-gray-500 text-center">Don't have an account ?<a href="auth-register.html" class="text-sky-500 ms-1"><b>Register</b></a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>