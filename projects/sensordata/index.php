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
                <h2 class="h2 margbot-big">PHP Extract, Transform, and Load</h2>
            </div>
            <p>
                <b>Automatic ETL platform that collects logs and send them to a point of contact for important information</b>
            </p>

            <div class="row">
                <div class="col-50">
                    <div class="projects-info">
                        <div class="wrap">
                            <p class="pro-info"> 
                            Sensordata files are logged every hour to ensure all information are updated on time. This application will extract the entire contents of the sensordata files ready to check. Then, the application will filter out some of the 15 entities only if the condition is met. Of all 15 entities, if the battery charge is less than or equal to 50.0%, the application will filter them out and save them to the same sensordata file. 
                            <br><br>
                                Technologies Used: HTML, CSS (Bootstrap), PHP, GuzzleHttp, Composer, Linux Cron Job, CSV files
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-50">
                    <div class="projects-info">
                        <div class="wrap">
                            <p class="pro-info">            
                            All unfiltered data are deleted once the application completes the scan. Finally, the application will load the updated sensordata files into a folder for viewing. An example scenario will be running this application to get the sensordata files. Then, filter them out only if the conditions are met. After the application process the sensordata files, it will send them to a folder or email to the IT Manager. The IT Manager will address the affected entities that its battery needs to be replaced as soon as possible. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-btn">
                <div class="div-btn">
                    <a href="https://sachelpurvis.me/etl/sadi/manual.php" target="_blank" class="btn color-9 btn-link p-cen-gac pulse">View Demo</a>
                </div>
            </div>
        </section>
    </div>
</div>
</html>