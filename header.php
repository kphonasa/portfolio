<!--Katrina Phonasa Website-->
<!--Header/Nav Menu-->
<!DOCTYPE html>
<html lang="en">
<style>
    <?php include_once 'styles\styles.css'; ?>
</style>

<head>
    <meta charset="UTF-8">
    <title>Katrina Phonasa | Programmer and Web Developer</title>
</head>

<header>
    <h1 align="middle">Katrina Phonasa</h1>

    <!--Nav Bar Menu-->
    <nav>
        <div class="containter">
            <div align="middle">
                <ul>
                    <li <?php if($menuActive=0){echo 'class="active"';}?>><a href="index.php">Home</a></li>
                    <li <?php if($menuActive=1){echo 'class="active"';}?>><a href="projects.php">Projects</a></li>
                    <li <?php if($menuActive=2){echo 'class="active"';}?>><a href="contactme.php">Contact Me</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>