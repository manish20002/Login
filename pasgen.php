<?php
if (isset($_POST['gen'])) {
    $result = '';
    if (isset($_POST['check6'])) {
        PassGenerator(6);
    } else if (isset($_POST['check10'])) {
        PassGenerator(10);
    } else if (isset($_POST['check12'])) {
        PassGenerator(12);
    } else {
        PassGenerator(8);
    }
}
function PassGenerator($len)
{
    global $result;
    $validChar = 'abcdefghijklmnopqrstuvwz!@#$%^&*ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    while (0 < $len--) {
        $result .= $validChar[random_int(0, strlen($validChar) - 1)];
    }
}
?>
<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PassGenerator</title>
</head>

<body>
    <?php require 'fend/_nav.php' ?>
    <table align="center">
        <tr>
            <td>
                <div class="text-gray-600 body-font">
                    <h1 class="title-font font-medium text-3xl text-gray-900">Password Generator</h1>
                    <p class="mt-2 font-style: italic">Defult generator is 8 Character</p>
                    <form class="" action="" method="POST">
                        <div class="relative mb-4">
                            <label for="result" class="leading-7 text-lg text-gray-600">Result</label>
                            <input type="text" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="result" value="<?php echo (@$result); ?>">
                        </div>
                        <div class="flex flex-col">
                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" name="check6" value="6" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">6 Character</span>
                            </label>

                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" name="check10" value="10" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">10 Character</span>
                            </label>

                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" name="check12" value="12" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">12 Character</span>
                            </label>
                        </div>
                        <button class="flex-shrink-0 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-10 sm:mt-0" type="submit" name="gen">Generate</button>
                    </form>
                </div>
            </td>
        </tr>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>