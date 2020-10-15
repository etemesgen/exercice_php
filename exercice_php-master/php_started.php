<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="classement des langages web">
    <title>Spécial arrow</title>
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/png" href="image/HTML_Logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/arrow.css">
</head>
<body>
    <header>
        <h1>Spécial arrow <i aria-hidden="true" class="arrow-left"></i></h1>
    </header>
    <main>
        <div class="section" role="table" aria-label="table-info">
            <table>
                <caption>Le top 10 des langages</caption>
                <thead>
                    <tr>
                        <th role="columnheader">Classement</th>
                        <th>Langage</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Python</td>
                        <td>Web &amp; application</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>C++</td>
                        <td>Application</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Node js</td>
                        <td>Web &amp; application</td>
                    </tr>
                    <tr>
                            <td>4</td>
                            <td>Php</td>
                            <td>Web &amp; application</td>
                        </tr>
                </tbody>
                <tfoot>
                        <tr>
                            <th>Classement</th>
                            <th>Langage</th>
                            <th>Type</th>
                        </tr>
                </tfoot>
            </table>

            <?php
               $python = array (
                    'classement' => '1',
                    'langage' => 'Python',
                    'type' => 'Web application'
                );

                print-r($python);
            ?> 

        </div>
        <footer>
            <p>&copy; - Giusmili <?php print date('Y') ?></p>
        </footer>
    </main>
</body>
</html>