<!DOCTYPE html>
<html lang="fr">

<head>
    <title>AptioTech - Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="fr_FR" />
    <link rel="canonical" href="sign-in.html" />
    <link rel="shortcut icon" href="{{ asset('back') }}/assets/media/logos/favicon.ico" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,500,600,700" />

    <link href="{{ asset('back') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

</head>

<body id="kt_body" class="app-blank app-blank">
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>

    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover  bgi-position-center"
                style="background-image: url({{ asset('back') }}/assets/media/misc/auth-bg.png)">
                <div class="d-flex flex-column flex-center p-6 p-lg-10 w-100">
                    <img class="d-none d-lg-block mx-auto w-300px w-lg-75 w-xl-500px mb-10 mb-lg-20"
                        src="{{ asset('back') }}/assets/media/logos/logo-white.png" alt="" />
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-500px p-10">
                        <form class="form w-100" action="#" method="POST">
                            @csrf
                            <div class="text-center mb-11">
                                <h1 class="text-gray-900 fw-bolder mb-3">
                                    Se connecter
                                </h1>
                                <div class="text-gray-500 fw-semibold fs-6">
                                    AptioTech
                                </div>
                            </div>
                            <div class="fv-row mb-8">
                                <input type="text" required placeholder="E-mail" name="email" autocomplete="off"
                                    class="form-control bg-transparent" />
                            </div>
                            <div class="fv-row mb-3">
                                <input type="password" required placeholder="Mot de passe" name="password"
                                    autocomplete="off" class="form-control bg-transparent" />
                            </div>
                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                <div></div>
                                <a href="{{ url('reset') }}" class="link-primary">
                                    Mot de passe oublié ?
                                </a>
                            </div>
                            <div class="d-grid mb-10">
                                <button type="submit" class="btn btn-primary">Se
                                    connecter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('back') }}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('back') }}/assets/js/scripts.bundle.js"></script>

    <script src="{{ asset('back') }}/assets/js/custom/authentication/sign-in/general.js"></script>

</body>

</html>
