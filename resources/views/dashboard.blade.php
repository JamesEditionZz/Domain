<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ข้อมูลและรายละเอียดของ Package ต่างๆ') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto xxl:px-10 xl:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table table-striped table-bordered">
                    <div class="container">
                        <tr>
                            <td></td>
                            <td colspan="1" align="center"><a href="{{url('/template?key=1')}}"><button class="btn btn-primary">ฟรี Package</button></a></td>
                            <td colspan="1" align="center"><a href="{{url('/template?key=2')}}"><button class="btn btn-primary">Package A</button></a></td>
                            <td colspan="1" align="center"><a href="{{url('/template?key=3')}}"><button class="btn btn-primary">Package B</button></a></td>
                            <td colspan="1" align="center"><a href="{{url('/template?key=4')}}"><button class="btn btn-primary">Package C</button></a></td>
                        </tr>
                        <tr>
                            <th>ราคา</th>
                            <th class="text-center">Free</th>
                            <th class="text-center">599 ต่อเดือน / 5000 ต่อปี</th>
                            <th class="text-center">699 ต่อเดือน / 8000 ต่อปี</th>
                            <th class="text-center">999 ต่อเดือน / 10000 ต่อปี</th>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <th class="text-center">O</th>
                            <th class="text-center">X</th>
                            <th class="text-center">X</th>
                            <th class="text-center">X</th>
                        </tr>
                        <tr>
                            <th>Domain</th>
                            <th class="text-center">X</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                        </tr>
                        <tr>
                            <th>SSL let's Encrypt</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                        </tr>
                        <tr>
                            <th>Web Hosting</th>
                            <th class="text-center">-</th>
                            <th class="text-center">5 GB</th>
                            <th class="text-center">10 GB</th>
                            <th class="text-center">15 GB</th>
                        </tr>
                        <tr>
                            <th>Respondsive</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                        </tr>
                        <tr>
                            <th>จำนวนภาษา</th>
                            <th class="text-center">1 ภาษา</th>
                            <th class="text-center">1 ภาษา</th>
                            <th class="text-center">1 ภาษา</th>
                            <th class="text-center">1 ภาษา</th>
                        </tr>
                        <tr>
                            <th>โควต้าแก้ไขเว็ปไซต์</th>
                            <th class="text-center">X</th>
                            <th class="text-center">1 ครั้ง</th>
                            <th class="text-center">1 ครั้ง</th>
                            <th class="text-center">2 ครั้ง</th>
                        </tr>
                        <tr>
                            <th>จำนวนเมนูที่มีให้เลือก</th>
                            <th class="text-center">5เมนู</th>
                            <th class="text-center">10เมนู</th>
                            <th class="text-center">15เมนู</th>
                            <th class="text-center">20เมนู</th>
                        </tr>
                        <tr>
                            <th>Artwork/Banner ภาพนิ่ง</th>
                            <th class="text-center">X</th>
                            <th class="text-center">1 ชิ้น/เดือน</th>
                            <th class="text-center">2 ชิ้น/เดือน</th>
                            <th class="text-center">3 ชิ้น/เดือน</th>
                        </tr>
                        <tr>
                            <th>Re-write Content ในเว็ปไซต์</th>
                            <th class="text-center">X</th>
                            <th class="text-center">1 หน้า A4</th>
                            <th class="text-center">2 หน้า A4</th>
                            <th class="text-center">3 หน้า A4</th>
                        </tr>
                        <tr>
                            <th>โค้ต้าเปลี่ยนข้อมูล/รูปภาพ</th>
                            <th class="text-center">X</th>
                            <th class="text-center">1 ตำแหน่ง/เดือน</th>
                            <th class="text-center">2 ตำแหน่ง/เดือน</th>
                            <th class="text-center">3 ตำแหน่ง/เดือน</th>
                        </tr>
                        <tr>
                            <th>ติดTracking Code</th>
                            <th class="text-center">X</th>
                            <th class="text-center">1 Tracking / เดือน</th>
                            <th class="text-center">2 Tracking / เดือน</th>
                            <th class="text-center">5 Tracking / เดือน</th>
                        </tr>
                        <tr>
                            <th>E-Commerce</th>
                            <th class="text-center">X</th>
                            <th class="text-center">X</th>
                            <th class="text-center">X</th>
                            <th class="text-center">X</th>
                        </tr>
                        <tr>
                            <th>ข้อมูลสินค้า</th>
                            <th class="text-center">X</th>
                            <th class="text-center">X</th>
                            <th class="text-center">X</th>
                            <th class="text-center">X</th>
                        </tr>
                    </div>
                </table>
            </div>
        </div>
    </div>

    <div class="py-3">
        <div class="max-w-7xl mx-auto xxl:px-10 xl:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table table-striped table-bordered">
                    <div class="container">
                        <tr>
                            <td></td>
                            <td colspan="1" align="center"><a href="{{url('/template?key=5')}}"><button class="btn btn-primary">Package D</button></td>
                            <td colspan="1" align="center"><a href="{{url('/template?key=6')}}"><button class="btn btn-primary">Package E</button></td>
                            <td colspan="1" align="center"><a href="{{url('/template?key=7')}}"><button class="btn btn-primary">Package F</button></td>
                        </tr>
                        <tr>
                            <th>ราคา</th>
                            <th class="text-center">1699 ต่อเดือน / 20000 ต่อปี</th>
                            <th class="text-center">2599 ต่อเดือน / 30000 ต่อปี</th>
                            <th class="text-center">3599 ต่อเดือน / 40000 ต่อปี</th>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <th class="text-center">X</th>
                            <th class="text-center">X</th>
                            <th class="text-center">X</th>
                        </tr>
                        <tr>
                            <th>Domain</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                        </tr>
                        <tr>
                            <th>SSL let's Encrypt</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                        </tr>
                        <tr>
                            <th>Web Hosting</th>
                            <th class="text-center">20 GB</th>
                            <th class="text-center">25 GB</th>
                            <th class="text-center">30 GB</th>
                        </tr>
                        <tr>
                            <th>Respondsive</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                        </tr>
                        <tr>
                            <th>จำนวนภาษา</th>
                            <th class="text-center">1 ภาษา</th>
                            <th class="text-center">1 ภาษา</th>
                            <th class="text-center">1 ภาษา</th>
                        </tr>
                        <tr>
                            <th>โควต้าแก้ไขเว็ปไซต์</th>
                            <th class="text-center">3 ครั้ง</th>
                            <th class="text-center">4 ครั้ง</th>
                            <th class="text-center">5 ครั้ง</th>
                        </tr>
                        <tr>
                            <th>จำนวนเมนูที่มีให้เลือก</th>
                            <th class="text-center">25เมนู</th>
                            <th class="text-center">30เมนู</th>
                            <th class="text-center">40เมนู</th>
                        </tr>
                        <tr>
                            <th>Artwork/Banner ภาพนิ่ง</th>
                            <th class="text-center">5 ชิ้น/เดือน</th>
                            <th class="text-center">8 ชิ้น/เดือน</th>
                            <th class="text-center">10 ชิ้น/เดือน</th>
                        </tr>
                        <tr>
                            <th>Re-write Content ในเว็ปไซต์</th>
                            <th class="text-center">5 หน้า A4</th>
                            <th class="text-center">10 หน้า A4</th>
                            <th class="text-center">15 หน้า A4</th>
                        </tr>
                        <tr>
                            <th>โค้ต้าเปลี่ยนข้อมูล/รูปภาพ</th>
                            <th class="text-center">5 ตำแหน่ง/เดือน</th>
                            <th class="text-center">10 ตำแหน่ง/เดือน</th>
                            <th class="text-center">15 ตำแหน่ง/เดือน</th>
                        </tr>
                        <tr>
                            <th>ติดTracking Code</th>
                            <th class="text-center">10 Tracking / เดือน</th>
                            <th class="text-center">15 Tracking / เดือน</th>
                            <th class="text-center">20 Tracking / เดือน</th>
                        </tr>
                        <tr>
                            <th>E-Commerce</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                            <th class="text-center">O</th>
                        </tr>
                        <tr>
                            <th>ข้อมูลสินค้า</th>
                            <th class="text-center">50 ชิ้น</th>
                            <th class="text-center">100 ชิ้น</th>
                            <th class="text-center">200 ชิ้น</th>
                        </tr>
                        <tr>
                            <th></th>
                                <th colspan="4" class="p-3 mb-2 bg-warning text-dark text-center">พิเศษ!!!! สำหรับแพค D-F จ่ายรายเดือน(เซ็นสัญญา 2ปี) รับฟรี! ออกแบบ Video Light Weight Motion Graphic</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="1" class="p-3 mb-2 bg-warning text-dark text-center">1ชิ้น / ปี</th>
                            <th colspan="1" class="p-3 mb-2 bg-warning text-dark text-center">3ชิ้น / ปี</th>
                            <th colspan="1" class="p-3 mb-2 bg-warning text-dark text-center">5ชิ้น / ปี</th>
                        </tr>
                    </div>
                </table>
                <br>
            </div>
        </div>
    </div>

</x-app-layout>
