<x-app-layout>
    <x-slot name="header">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cardo&family=Josefin+Sans:wght@100&family=Oswald:wght@200&display=swap" rel="stylesheet">
        <div class="container">
            <div class="bg-warning font-header">
                <p>
                <h3 align="center">{{ 'พิเศษสำหรับแพ็คเกจรายเดือน ฿1699 / ฿2599 / ฿3599' }}</h3>
                </p>
                <p>
                <h3 align="center">{{ 'รับฟรี!! ออกแบบ Video Light Weight Motion Graphic (เซ็นสัญญา 2 ปี)' }}</h3>
                </p>
            </div>
        </div>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <style>
            .backa {
                background-color: rgb(206, 206, 206);
            }

            .backb {
                background-color: rgb(221, 221, 221);
            }

            .accordion-body {
                padding: 0;
            }

            .font-Oswald{
                font-family: 'Oswald', sans-serif;
            }
            .font-Cardo{
                font-family: 'Cardo', serif;
            }
            .font-JosefinSans{
                font-family: 'Josefin Sans', sans-serif;
            }
        </style>
        <div class="py-2">
            <div class="max-w-7xl mx-auto xxl:px-10 xl:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <table class="table table-striped table-bordered">
                        <div class="container">
                            <div class="row">
                                <div class="col accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                {{ 'แพ็คเกจฟรี' }}
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="container backa">
                                                    <div class="row">
                                                        <div class="col mt-4">
                                                            <p>{{ 'URL' }}</p>
                                                        </div>
                                                        <div class="col mt-4" align="right">
                                                            <p>{{ 'O' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container backb">
                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <p>{{ 'Domain' }}</p>
                                                        </div>
                                                        <div class="col mt-3" align="right">
                                                            <p>{{ 'X' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container backa">
                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <p>{{ "SSL let's Encrypt" }}</p>
                                                        </div>
                                                        <div class="col mt-3" align="right">
                                                            <p>{{ 'O' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container backb">
                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <p>{{ 'Web Hosting' }}</p>
                                                        </div>
                                                        <div class="col mt-3" align="right">
                                                            <p>{{ 'X' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container backa">
                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <p>{{ 'Respondsive' }}</p>
                                                        </div>
                                                        <div class="col mt-3" align="right">
                                                            <p>{{ 'O' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container backb">
                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <p>{{ 'จำนวนภาษา' }}</p>
                                                        </div>
                                                        <div class="col mt-3" align="right">
                                                            <p>{{ '1 ภาษา' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container backa">
                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <p>{{ 'โควต้าแก้ไขเว็ปไซต์' }}</p>
                                                        </div>
                                                        <div class="col mt-3" align="right">
                                                            <p>{{ 'X' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container backb">
                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <p>{{ 'จำนวนเมนูที่มีให้เลือก' }}</p>
                                                        </div>
                                                        <div class="col mt-3" align="right">
                                                            <p>{{ '5 เมนู' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container backa">
                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <p>{{ 'Artwork/Banner ภาพนิ่ง' }}</p>
                                                        </div>
                                                        <div class="col mt-3" align="right">
                                                            <p>{{ 'X' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container backb">
                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <p>{{ 'Re-write Content ในเว็ปไซต์' }}</p>
                                                        </div>
                                                        <div class="col mt-3" align="right">
                                                            <p>{{ 'X' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container backa">
                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <p>{{ 'โค้วต้าเปลี่ยนข้อมูล/รูปภาพ' }}</p>
                                                        </div>
                                                        <div class="col mt-3" align="right">
                                                            <p>{{ 'X' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container backb">
                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <p>{{ 'ติดTracking Code' }}</p>
                                                        </div>
                                                        <div class="col mt-3" align="right">
                                                            <p>{{ 'X' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container backa">
                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <p>{{ 'E-Commerce' }}</p>
                                                        </div>
                                                        <div class="col mt-3" align="right">
                                                            <p>{{ 'X' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container backb">
                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <p>{{ 'ข้อมูลสินค้า' }}</p>
                                                        </div>
                                                        <div class="col mt-3" align="right">
                                                            <p>{{ 'X' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="form-control btn btn-primary" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne" id="package1"
                                                    value="1">
                                                    {{ 'เลือกแพ็คเกจ Free' }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                แพ็คเกจรายเดือน
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo1">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseTwo1"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseTwo1">
                                                            {{ 'แพ็คเกจ ฿599/เดือน' }}
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseTwo1"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="panelsStayOpen-headingTwo1">
                                                        <div class="accordion-body">
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-4">
                                                                        <p>{{ 'URL' }}</p>
                                                                    </div>
                                                                    <div class="col mt-4" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Domain' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ "SSL let's Encrypt" }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Web Hosting' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '5 GB' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Respondsive' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนภาษา' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ภาษา' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โควต้าแก้ไขเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ครั้ง' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนเมนูที่มีให้เลือก' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '10 เมนู' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Artwork/Banner ภาพนิ่ง' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ชิ้น / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Re-write Content ในเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 หน้า A4' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โค้วต้าเปลี่ยนข้อมูล/รูปภาพ' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ตำแหน่ง / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ติดTracking Code' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 Tracking Code / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'E-Commerce' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ข้อมูลสินค้า' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="form-control btn btn-primary"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseTwo1"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseTwo1"
                                                                id="package2" value="2">
                                                                {{ 'เลือกแพ็คเกจ ฿599/เดือน' }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo2">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseTwo2"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseTwo2">
                                                            {{ 'แพ็คเกจ ฿699/เดือน' }}
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseTwo2"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="panelsStayOpen-headingTwo2">
                                                        <div class="accordion-body">
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-4">
                                                                        <p>{{ 'URL' }}</p>
                                                                    </div>
                                                                    <div class="col mt-4" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Domain' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ "SSL let's Encrypt" }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Web Hosting' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '10 GB' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Respondsive' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนภาษา' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ภาษา' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โควต้าแก้ไขเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ครั้ง' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนเมนูที่มีให้เลือก' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '15 เมนู' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Artwork/Banner ภาพนิ่ง' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '2 ชิ้น / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Re-write Content ในเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '2 หน้า A4' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โค้วต้าเปลี่ยนข้อมูล/รูปภาพ' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '2 ตำแหน่ง / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ติดTracking Code' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '2 Tracking Code / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'E-Commerce' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ข้อมูลสินค้า' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="form-control btn btn-primary"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseTwo2"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseTwo2"
                                                                id="package3" value="3">
                                                                {{ 'เลือกแพ็คเกจ ฿699/เดือน' }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo3">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseTwo3"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseTwo3">
                                                            {{ 'แพ็คเกจ ฿999/เดือน' }}
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseTwo3"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="panelsStayOpen-headingTwo3">
                                                        <div class="accordion-body">
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-4">
                                                                        <p>{{ 'URL' }}</p>
                                                                    </div>
                                                                    <div class="col mt-4" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Domain' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ "SSL let's Encrypt" }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Web Hosting' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '15 GB' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Respondsive' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนภาษา' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ภาษา' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โควต้าแก้ไขเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '2 ครั้ง' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนเมนูที่มีให้เลือก' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '20 เมนู' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Artwork/Banner ภาพนิ่ง' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '3 ชิ้น / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Re-write Content ในเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '3 หน้า A4' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โค้วต้าเปลี่ยนข้อมูล/รูปภาพ' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '3 ตำแหน่ง / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ติดTracking Code' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '5 Tracking Code / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'E-Commerce' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ข้อมูลสินค้า' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="form-control btn btn-primary"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseTwo3"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseTwo3"
                                                                id="package4" value="4">
                                                                {{ 'เลือกแพ็คเกจ ฿999/เดือน' }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo4">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseTwo4"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseTwo4">
                                                            {{ 'แพ็คเกจ ฿1699/เดือน' }}
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseTwo4"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="panelsStayOpen-headingTwo4">
                                                        <div class="accordion-body">
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-4">
                                                                        <p>{{ 'URL' }}</p>
                                                                    </div>
                                                                    <div class="col mt-4" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Domain' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ "SSL let's Encrypt" }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Web Hosting' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '20 GB' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Respondsive' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนภาษา' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ภาษา' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โควต้าแก้ไขเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '3 ครั้ง' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนเมนูที่มีให้เลือก' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '25 เมนู' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Artwork/Banner ภาพนิ่ง' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '5 ชิ้น / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Re-write Content ในเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '5 หน้า A4' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โค้วต้าเปลี่ยนข้อมูล/รูปภาพ' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '5 ตำแหน่ง / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ติดTracking Code' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '10 Tracking Code / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'E-Commerce' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ข้อมูลสินค้า' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '50 ชิ้น' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="form-control btn btn-primary"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseTwo4"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseTwo4"
                                                                id="package5" value="5">
                                                                {{ 'เลือกแพ็คเกจ ฿1699/เดือน' }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo5">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseTwo5"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseTwo5">
                                                            {{ 'แพ็คเกจ ฿2599/เดือน' }}
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseTwo5"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="panelsStayOpen-headingTwo5">
                                                        <div class="accordion-body">
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-4">
                                                                        <p>{{ 'URL' }}</p>
                                                                    </div>
                                                                    <div class="col mt-4" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Domain' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ "SSL let's Encrypt" }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Web Hosting' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '25 GB' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Respondsive' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนภาษา' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ภาษา' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โควต้าแก้ไขเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '4 ครั้ง' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนเมนูที่มีให้เลือก' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '30 เมนู' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Artwork/Banner ภาพนิ่ง' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '8 ชิ้น / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Re-write Content ในเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '10 หน้า A4' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โค้วต้าเปลี่ยนข้อมูล/รูปภาพ' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '10 ตำแหน่ง / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ติดTracking Code' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '15 Traking Code / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'E-Commerce' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ข้อมูลสินค้า' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '100 ชิ้น' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="form-control btn btn-primary"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseTwo5"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseTwo5"
                                                                id="package6" value="6">
                                                                {{ 'เลือกแพ็คเกจ ฿2599/เดือน' }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo6">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseTwo6"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseTwo6">
                                                            {{ 'แพ็คเกจ ฿3599/เดือน' }}
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseTwo6"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="panelsStayOpen-headingTwo6">
                                                        <div class="accordion-body">
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-4">
                                                                        <p>{{ 'URL' }}</p>
                                                                    </div>
                                                                    <div class="col mt-4" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Domain' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ "SSL let's Encrypt" }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Web Hosting' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '30 GB' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Respondsive' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนภาษา' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ภาษา' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โควต้าแก้ไขเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '5 ครั้ง' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนเมนูที่มีให้เลือก' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '40 เมนู' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Artwork/Banner ภาพนิ่ง' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '10 ชิ้น / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Re-write Content ในเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '15 หน้า A4' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โค้วต้าเปลี่ยนข้อมูล/รูปภาพ' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '15 ตำแหน่ง / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ติดTracking Code' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '20 Tracking Code / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'E-Commerce' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ข้อมูลสินค้า' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '200 ชิ้น' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="form-control btn btn-primary"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseTwo6"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseTwo6"
                                                                id="package7" value="7">
                                                                {{ 'เลือกแพ็คเกจ ฿3599/เดือน' }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseThree">
                                                {{ 'แพ็คเกจรายปี' }}
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree1">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseThree1"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseThree1">
                                                            {{ 'แพ็คเกจ ฿5000/ปี' }}
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseThree1"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="panelsStayOpen-headingThree1">
                                                        <div class="accordion-body">
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-4">
                                                                        <p>{{ 'URL' }}</p>
                                                                    </div>
                                                                    <div class="col mt-4" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Domain' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ "SSL let's Encrypt" }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Web Hosting' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '5 GB' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Respondsive' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนภาษา' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ภาษา' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โควต้าแก้ไขเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ครั้ง' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนเมนูที่มีให้เลือก' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '10 เมนู' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Artwork/Banner ภาพนิ่ง' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ชิ้น / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Re-write Content ในเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 หน้า A4' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โค้วต้าเปลี่ยนข้อมูล/รูปภาพ' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ตำแหน่ง / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ติดTracking Code' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 Tracking Code / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'E-Commerce' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ข้อมูลสินค้า' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="form-control btn btn-primary"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseThree1"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseThree1"
                                                                id="package8" value="8">
                                                                {{ 'เลือกแพ็คเกจ ฿5000/ปี' }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree2">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseThree2"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseThree2">
                                                            {{ 'แพ็คเกจ ฿8000/ปี' }}
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseThree2"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="panelsStayOpen-headingThree2">
                                                        <div class="accordion-body">
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-4">
                                                                        <p>{{ 'URL' }}</p>
                                                                    </div>
                                                                    <div class="col mt-4" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Domain' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ "SSL let's Encrypt" }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Web Hosting' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '10 GB' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Respondsive' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนภาษา' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ภาษา' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โควต้าแก้ไขเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ครั้ง' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนเมนูที่มีให้เลือก' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '15 เมนู' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Artwork/Banner ภาพนิ่ง' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '2 ชิ้น / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Re-write Content ในเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '2 หน้า A4' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โค้วต้าเปลี่ยนข้อมูล/รูปภาพ' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '2 ตำแหน่ง / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ติดTracking Code' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '2 Tracking Code / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'E-Commerce' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ข้อมูลสินค้า' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="form-control btn btn-primary"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseThree2"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseThree2"
                                                                id="package9" value="9">
                                                                {{ 'เลือกแพ็คเกจ ฿8000/ปี' }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree3">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseThree3"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseThree3">
                                                            {{ 'แพ็คเกจ ฿10000/ปี' }}
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseThree3"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="panelsStayOpen-headingThree3">
                                                        <div class="accordion-body">
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-4">
                                                                        <p>{{ 'URL' }}</p>
                                                                    </div>
                                                                    <div class="col mt-4" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Domain' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ "SSL let's Encrypt" }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Web Hosting' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '15 GB' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Respondsive' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนภาษา' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ภาษา' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โควต้าแก้ไขเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '2 ครั้ง' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนเมนูที่มีให้เลือก' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '20 เมนู' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Artwork/Banner ภาพนิ่ง' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '3 ชิ้น / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Re-write Content ในเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '3 หน้า A4' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โค้วต้าเปลี่ยนข้อมูล/รูปภาพ' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '3 ตำแหน่ง / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ติดTracking Code' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '5 Tracking Code / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'E-Commerce' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ข้อมูลสินค้า' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="form-control btn btn-primary"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseThree3"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseThree3"
                                                                id="package10" value="10">
                                                                {{ 'เลือกแพ็คเกจ ฿10000/ปี' }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree4">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseThree4"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseThree4">
                                                            {{ 'แพ็คเกจ ฿20000/ปี' }}
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseThree4"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="panelsStayOpen-headingThree4">
                                                        <div class="accordion-body">
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-4">
                                                                        <p>{{ 'URL' }}</p>
                                                                    </div>
                                                                    <div class="col mt-4" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Domain' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ "SSL let's Encrypt" }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Web Hosting' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '20 GB' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Respondsive' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนภาษา' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ภาษา' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โควต้าแก้ไขเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '3 ครั้ง' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนเมนูที่มีให้เลือก' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '25 เมนู' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Artwork/Banner ภาพนิ่ง' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '5 ชิ้น / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Re-write Content ในเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '5 หน้า A4' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โค้วต้าเปลี่ยนข้อมูล/รูปภาพ' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '5 ตำแหน่ง / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ติดTracking Code' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '10 Tracking Code / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'E-Commerce' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ข้อมูลสินค้า' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '50 ชิ้น' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="form-control btn btn-primary"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseThree4"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseThree4"
                                                                id="package11" value="11">
                                                                {{ 'เลือกแพ็คเกจ ฿20000/ปี' }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree5">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseThree5"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseThree5">
                                                            {{ 'แพ็คเกจ ฿30000/ปี' }}
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseThree5"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="panelsStayOpen-headingThree5">
                                                        <div class="accordion-body">
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-4">
                                                                        <p>{{ 'URL' }}</p>
                                                                    </div>
                                                                    <div class="col mt-4" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Domain' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ "SSL let's Encrypt" }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Web Hosting' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '25 GB' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Respondsive' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนภาษา' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ภาษา' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โควต้าแก้ไขเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '4 ครั้ง' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนเมนูที่มีให้เลือก' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '30 เมนู' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Artwork/Banner ภาพนิ่ง' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '8 ชิ้น / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Re-write Content ในเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '10 หน้า A4' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โค้วต้าเปลี่ยนข้อมูล/รูปภาพ' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '10 ตำแหน่ง / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ติดTracking Code' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '15 Traking Code / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'E-Commerce' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ข้อมูลสินค้า' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '100 ชิ้น' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="form-control btn btn-primary"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseThree5"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseThree5"
                                                                id="package12" value="12">
                                                                {{ 'เลือกแพ็คเกจ ฿30000/ปี' }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree6">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#panelsStayOpen-collapseThree6"
                                                            aria-expanded="false"
                                                            aria-controls="panelsStayOpen-collapseThree6">
                                                            {{ 'แพ็คเกจ ฿40000/ปี' }}
                                                        </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseThree6"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="panelsStayOpen-headingThree6">
                                                        <div class="accordion-body">
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-4">
                                                                        <p>{{ 'URL' }}</p>
                                                                    </div>
                                                                    <div class="col mt-4" align="right">
                                                                        <p>{{ 'X' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Domain' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ "SSL let's Encrypt" }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Web Hosting' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '30 GB' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Respondsive' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนภาษา' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '1 ภาษา' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โควต้าแก้ไขเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '5 ครั้ง' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'จำนวนเมนูที่มีให้เลือก' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '40 เมนู' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Artwork/Banner ภาพนิ่ง' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '10 ชิ้น / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'Re-write Content ในเว็ปไซต์' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '15 หน้า A4' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'โค้วต้าเปลี่ยนข้อมูล/รูปภาพ' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '15 ตำแหน่ง / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ติดTracking Code' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '20 Tracking Code / เดือน' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backa">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'E-Commerce' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ 'O' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container backb">
                                                                <div class="row">
                                                                    <div class="col mt-3">
                                                                        <p>{{ 'ข้อมูลสินค้า' }}</p>
                                                                    </div>
                                                                    <div class="col mt-3" align="right">
                                                                        <p>{{ '200 ชิ้น' }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="form-control btn btn-primary"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#panelsStayOpen-collapseThree6"
                                                                aria-expanded="false"
                                                                aria-controls="panelsStayOpen-collapseThree6"
                                                                id="package13" value="13">
                                                                {{ 'เลือกแพ็คเกจ ฿40000/ปี' }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p id="pack" align="center" class="mt-5"
                                    style="background-color: rgb(18, 97, 93)"></p>
                                <div id="pkfree" style="display: none" align="center">
                                        <img src="{{ asset('/public/image/202206110825Untitled.png') }}" alt="" style="width: 300px; height:500px;">
                                </div>

                                <div id="pk1" style="display: none">
                                    <div class="py-1">
                                        <div class="container">
                                            <div class="py-3">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        {{ 'เลือกประเภทธุรกิจ' }}
                                                        <select class="form-select busi" name="busi"
                                                            id="busi">
                                                            <option>{{ 'กรุณาเลือกธีม' }}</option>
                                                            @foreach ($business as $row)
                                                                <option value="{{ $row->id }}">
                                                                    {{ $row->name_business }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        {{ 'ประเภทเว็บไซต์' }}
                                                        <select class="form-select web" name="busi"
                                                            id="web">
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    {{ 'Logo สำหรับใช้ในเว็บไซต์' }}
                                                    <input type="file" class="form-control" name="logo">
                                                </div>
                                                <div class="col-sm-4">
                                                    {{ 'ไฟล์ CI (สี,ฟ้อน,การจัดวาง)' }}
                                                    <input type="file" class="form-control" name="CI">
                                                </div>
                                                <div class="col-sm-4">
                                                    {{ 'รายละเอียดเนื้อหา (ไฟล์ Word)' }}
                                                    <input type="file" class="form-control" name="word">
                                                </div>
                                            </div>
                                            <div class="py-3">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        {{ 'เมนูที่ต้องการ (ไฟล์ Word)' }}
                                                        <input type="file" class="form-control" name="menu">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        {{ 'รูปสินค้า หรือ บริการ (ไฟล์ JPEG,PNG)' }}
                                                        <input type="file" class="form-control" name="product">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        {{ 'รายละเอียดสินค้าหรือบริการทั้งหมด (ไฟล์ Word)' }}
                                                        <input type="file" class="form-control" name="menu">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-2">
                                                <div class="row">
                                                    <p>
                                                    <h4 align="center">{{ 'สีที่อยากได้และสไตล์ของตัวหนังสือ' }}
                                                    </h4>
                                                    </p>
                                                    <div class="col-sm-2">
                                                        <p>{{ 'สีที่ 1 (สีหลัก 70%)' }}</p>
                                                        <input type="color" class="form-control" name="color1">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <p>{{ 'สีที่ 2 (สีรอง 20%)' }}</p>
                                                        <input type="color" class="form-control" name="color2">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <p>{{ 'สีที่ 3 (สีรอง 10%)' }}</p>
                                                        <input type="color" class="form-control" name="color3">
                                                    </div>
                                                    <div class="col-sm-1">

                                                    </div>
                                                    <div class="col-sm-5">
                                                        <p align="center">{{ 'สไตล์ตัวหนังสือ' }}</p>
                                                        <input type="radio" id="Oswald" name="Font" value="Oswald">
                                                        <label for="Oswald" class="font-Oswald" style="font-size: 24px">Oswald</label><span style="padding: 30px"></span>
                                                        <input type="radio" id="Josefin Sans" name="Font" value="Josefin Sans">
                                                        <label for="Josefin Sans" class="font-JosefinSans" style="font-size: 24px">Josefin Sans</label><span style="padding: 30px"></span>
                                                        <input type="radio" id="Cardo" name="Font" value="Cardo">
                                                        <label for="Cardo" class="font-Cardo" style="font-size: 24px">Cardo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-2">
                                                <div class="row">
                                                    <p>
                                                    <h4 align="center">{{ 'Arkwork 1' }}</h4>
                                                    </p>
                                                    <div class="col-sm-4">
                                                        {{ 'อธิบายสิ่งที่ต้องการให้มีใน Arkwork' }}
                                                        <input type="text" class="form-control"
                                                            name="aboutark1">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        {{ 'ข้อความ Arkwork' }}
                                                        <input type="text" class="form-control"
                                                            name="messageark1">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        {{ 'Mood & Tone ของ Arkwork (File ตัวอย่าง)' }}
                                                        <input type="file" class="form-control"
                                                            name="arkfile1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-2">
                                                <div class="row">
                                                    <p>
                                                    <h4 align="center">{{ 'Arkwork 2' }}</h4>
                                                    </p>
                                                    <div class="col-sm-4">
                                                        {{ 'อธิบายสิ่งที่ต้องการให้มีใน Arkwork' }}
                                                        <input type="text" class="form-control"
                                                            name="aboutark2">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        {{ 'ข้อความ Arkwork' }}
                                                        <input type="text" class="form-control"
                                                            name="messageark2">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        {{ 'Mood & Tone ของ Arkwork (File ตัวอย่าง)' }}
                                                        <input type="file" class="form-control"
                                                            name="arkfile2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="container p-2 text-center">
                                        <h3>กรุณาเลือกธีม</h3>
                                    </div>
                                    <div class="grid-container">
                                        <table>
                                            <tr>
                                                <td class="img" \n style="width: 20%" align="center"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{-- ------------------------------------------------------------------------------------------------------------------------------------------------- --}}

                        </div>
                    </table>
                </div>
            </div>
        </div>
        {{ csrf_field() }}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $('document').ready(function() {
                $('#package1').click(function() {
                    $('#pack').html('<p>คุณเลือกแพ็คเกจ Free</p>').css({
                        "font-size": "150%",
                        "color": "White"
                    });
                    $("#pkfree").show(800);
                    $("#pk1").hide(800);
                });
            });

            $('document').ready(function() {
                $('#package2').click(function() {
                    $('#pack').html('<p>คุณเลือกแพ็คเกจ ฿599/เดือน</p>').css({
                        "font-size": "150%",
                        "color": "White"
                    });
                    $("#pk1").show(800);
                    $("#pkfree").hide(800);
                });
            });
            $('document').ready(function() {
                $('#package3').click(function() {
                    $('#pack').html('<p>คุณเลือกแพ็คเกจ ฿699/เดือน</p>').css({
                        "font-size": "150%",
                        "color": "White"
                    });
                    $("#pk1").show(800);
                    $("#pkfree").hide(800);
                });
            });
            $('document').ready(function() {
                $('#package4').click(function() {
                    $('#pack').html('<p>คุณเลือกแพ็คเกจ ฿999/เดือน</p>').css({
                        "font-size": "150%",
                        "color": "White"
                    });
                    $("#pk1").show(800);
                    $("#pkfree").hide(800);
                });
            });
            $('document').ready(function() {
                $('#package5').click(function() {
                    $('#pack').html('<p>คุณเลือกแพ็คเกจ ฿1699/เดือน</p>').css({
                        "font-size": "150%",
                        "color": "White"
                    });
                    $("#pk1").show(800);
                    $("#pkfree").hide(800);
                });
            });
            $('document').ready(function() {
                $('#package6').click(function() {
                    $('#pack').html('<p>คุณเลือกแพ็คเกจ ฿2599/เดือน</p>').css({
                        "font-size": "150%",
                        "color": "White"
                    });
                    $("#pk1").show(800);
                    $("#pkfree").hide(800);
                });
            });
            $('document').ready(function() {
                $('#package7').click(function() {
                    $('#pack').html('<p>คุณเลือกแพ็คเกจ ฿3599/เดือน</p>').css({
                        "font-size": "150%",
                        "color": "White"
                    });
                    $("#pk1").show(800);
                    $("#pkfree").hide(800);
                });
            });
            $('document').ready(function() {
                $('#package8').click(function() {
                    $('#pack').html('<p>คุณเลือกแพ็คเกจ ฿5000/ปี</p>').css({
                        "font-size": "150%",
                        "color": "White"
                    });
                    $("#pk1").show(800);
                    $("#pkfree").hide(800);
                });
            });
            $('document').ready(function() {
                $('#package9').click(function() {
                    $('#pack').html('<p>คุณเลือกแพ็คเกจ ฿8000/ปี</p>').css({
                        "font-size": "150%",
                        "color": "White"
                    });
                    $("#pk1").show(800);
                    $("#pkfree").hide(800);
                });
            });
            $('document').ready(function() {
                $('#package10').click(function() {
                    $('#pack').html('<p>คุณเลือกแพ็คเกจ ฿10000/ปี</p>').css({
                        "font-size": "150%",
                        "color": "White"
                    });
                    $("#pk1").show(800);
                    $("#pkfree").hide(800);
                });
            });
            $('document').ready(function() {
                $('#package11').click(function() {
                    $('#pack').html('<p>คุณเลือกแพ็คเกจ ฿20000/ปี</p>').css({
                        "font-size": "150%",
                        "color": "White"
                    });
                    $("#pk1").show(800);
                    $("#pkfree").hide(800);
                });
            });
            $('document').ready(function() {
                $('#package12').click(function() {
                    $('#pack').html('<p>คุณเลือกแพ็คเกจ ฿30000/ปี</p>').css({
                        "font-size": "150%",
                        "color": "White"
                    });
                    $("#pk1").show(800);
                    $("#pkfree").hide(800);
                });
            });
            $('document').ready(function() {
                $('#package13').click(function() {
                    $('#pack').html('<p>คุณเลือกแพ็คเกจ ฿40000/ปี</p>').css({
                        "font-size": "150%",
                        "color": "White"
                    });
                    $("#pk1").show(800);
                    $("#pkfree").hide(800);
                });
            });
            $('.busi').change(function() {
                if ($(this).val() != '') {
                    var select = $(this).val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{ route('dropdown.fetch') }}",
                        method: "POST",
                        data: {
                            select: select,
                            _token: _token
                        },
                        success: function(result) {
                            $('.web').html(result);
                        }
                    })
                }
            });
            $('.web').change(function() {
                if ($(this).val() != '') {
                    var selectweb = $(this).val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{ route('img') }}",
                        method: "POST",
                        data: {
                            selectweb: selectweb,
                            _token: _token
                        },
                        success: function(resultimg) {
                            $('.img').html(resultimg);
                        }
                    })
                }
            });
        </script>

    </x-slot>
</x-app-layout>
