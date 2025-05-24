<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
   <header>
        <table>
            <tr>
                <td>
                    <a href="about">About</a>
                </td>
                <td></td>
                <td>
                    <a href="contact">Contact</a>
                </td>
                <td></td>
                <td>
                    <a href="projects">Projects</a>
                </td>
                <td></td>
                <td>
                    <a href="skills">Skills</a>
                </td>
            </tr>
        </table>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>