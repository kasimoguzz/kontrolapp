<?php
    require "libs/functions.php";
?>
<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>
<style>
        body {
            background-color: #f8f9fa;
        }

       

        .card {
            border-radius: 15px;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-bottom: 0;
            border-radius: 15px 15px 0 0;
        }

        .card-body p {
            font-size: 18px;
        }
    </style>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Yönetici İletişim Bilgileri</h3>
                </div>
                <div class="card-body">
                    <p><strong>Adı Soyadı:</strong> John Doe</p>
                    <p><strong>E-posta Adresi:</strong> john.doe@example.com</p>
                    <p><strong>Telefon Numarası:</strong> (555) 123-4567</p>
                    <p><strong>Ofis Adresi:</strong> 1234 Örnek Caddesi, Örnek Şehir, Ülke</p>
                </div>
            </div>
        </div>
    </div>
</div>