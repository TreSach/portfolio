<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sach Purvis | Web Developer</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" type="text/css" href="https://sachelpurvis.me/css/style.css">
        <link rel="icon" type="image/png" href="../img/favicon.png">
    </head>
    <div class="body-wrap">
    <?php include '../../left-menu.php'; ?>

    <div class="content-wrap" id="js-wrap">
        <section class="projects" id="projects">

            <div class="cen-text">
                <h2 class="h2 margbot-big">Tailgate Web Automation</h2>
            </div>
            <p>
                <b>Senior Capstone Project</b>
            </p>

            <div class="row">
                <div class="col-50">
                    <div class="projects-info">
                        <div class="wrap">
                            <p class="pro-info"> 
                            My group capstone project is focused on setting up a secure connection from two external servers to our internal server. Two external servers are defined: Tailgate (TruckBed) server is a Ubuntu operating system that has all of its computer components connected in a small Georgia Southern Truck Bed. Cooler server is a Raspberry Pi operating system that are connected and powered with external batteries in a Georgia Southern Cooler. Our internal server is a private virtual machine (VMWare) that is connected to our private network. 
                            <br><br>
                            The purpose of our project is to remotely sync a deliverable file from one external server to our internal server and sync website files from our internal server to both external servers. Also, we set up Cron Jobs for automating rsync commands and extract, transform, load file into our internal database. 
                            <br><br>
                                Technologies Used: PHP, Linux Rsync, SSH, Linux Cron Job, Ubuntu, Raspberry Pi, MySQL, VMWare, HTML, CSS, and jQuery
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-50">
                    <div class="projects-info">
                        <div class="wrap">
                            <p class="pro-info">            
                            After we closed our capstone project, we successfully set up automated rsync commands, developed PHP script for file extraction, transformation (into SQL queries), and upload into the database, and updated websites and system files. When a user fills out the form in our recruitment website, the form data will append to our deliverable file in one of the external server directory. 
                            <br><br>
                            When the external servers are returned to Georgia Southern and turned on, the automated rysnc command will execute by sending the deliverable file to the internal server. It will also delete the file from the source location. Until the time calls and the internal server is running, the automated PHP script extracts the contents of the file. The contents will bind and transform into SQL queries and then execute the query in the database. All contents are uploaded to the database and the file is successfully deleted. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-50">
                    <img src="../../img/coolerrasppi.jpg" alt="Cooler - Raspberry Pi" class="pro-img" />
                    <img src="../../img/tailgateubuntu.jpg" alt="Truck Bed - Ubuntu" class="pro-img" />
                </div>
        </section>
    </div>
</div>
</html>