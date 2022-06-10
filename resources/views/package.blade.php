<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if ($value == '1')
                <h5>{{'Package ที่คุณเลือก Free'}}</h5>
            @endif
            @if ($value == '2')
                <h5>{{'Package ที่คุณเลือก package A'}}</h5>
            @endif
            @if ($value == '3')
                <h5>{{'Package ที่คุณเลือก package B'}}</h5>
            @endif
            @if ($value == '4')
                <h5>{{'Package ที่คุณเลือก package C'}}</h5>
            @endif
            @if ($value == '5')
                <h5>{{'Package ที่คุณเลือก package D'}}</h5>
            @endif
            @if ($value == '6')
                <h5>{{'Package ที่คุณเลือก package E'}}</h5>
            @endif
            @if ($value == '7')
                <h5>{{'Package ที่คุณเลือก package F'}}</h5>
            @endif
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto xxl:px-10 xl:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table table-striped table-bordered">
                    @if ($value == '1')
                        <tr>
                            <th>URL</th>
                            <th>O</th>
                        </tr>
                        <tr>
                            <th>Domain</th>
                            <th>X</th>
                        </tr>
                        <tr>
                            <th>SSL let's Encrypt</th>
                            <th>O</th>
                        </tr>
                        <tr>
                            <th>Web Hosting</th>
                            <th>-</th>
                        </tr>
                        <tr>
                            <th>Respondsive</th>
                            <th>O</th>
                        </tr>
                        <tr>
                            <th>จำนวนภาษา</th>
                            <th>1 Language</th>
                        </tr>
                        <tr>
                            <th>โควต้าแก้ไขเว็ปไซต์</th>
                            <th>X</th>
                        </tr>
                        <tr>
                            <th>จำนวนเมนูที่มีให้เลือก</th>
                            <th>5เมนู</th>
                        </tr>
                        <tr>
                            <th>Artwork/Banner ภาพนิ่ง</th>
                            <th>X</th>
                        </tr>
                        <tr>
                            <th>Re-write Content ในเว็ปไซต์</th>
                            <th>X</th>
                        </tr>
                        <tr>
                            <th>โค้ต้าเปลี่ยนข้อมูล/รูปภาพ</th>
                            <th>X</th>
                        </tr>
                        <tr>
                            <th>ติดTracking Code</th>
                            <th>X</th>
                        </tr>
                        <tr>
                            <th>E-Commerce</th>
                            <th>X</th>
                        </tr>
                        <tr>
                            <th>ข้อมูลสินค้า</th>
                            <th>X</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="2"><form name="checkoutForm" method="POST" action="{{ url('checkout') }}">
                                <script type="text/javascript" src="https://cdn.omise.co/omise.js"
                                  data-key="pkey_test_5s3f8hlot89cyz5wdbf"
                                  data-frame-label="CLOUD_IDC"
                                  data-button-label="ชำระเงิน"
                                  data-submit-label="ชำระเงิน"
                                  data-location="no"
                                  data-amount="10025"
                                  data-currency="thb"
                                  >
                                </script>
                                <!--the script will render <input type="hidden" name="omiseToken"> for you automatically-->
                              </form></th>
                        </tr>              
                              </div>
                            </div>
                          </div>
                        @elseif ($value == '2')
                            <tr>
                                <th>URL</th>
                                <th>X</th>
                            </tr>
                            <tr>
                                <th>Domain</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>SSL let's Encrypt</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>Web Hosting</th>
                                <th>5GB</th>
                            </tr>
                            <tr>
                                <th>Respondsive</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>จำนวนภาษา</th>
                                <th>1 Language</th>
                            </tr>
                            <tr>
                                <th>โควต้าแก้ไขเว็ปไซต์</th>
                                <th>1 ครั้ง</th>
                            </tr>
                            <tr>
                                <th>จำนวนเมนูที่มีให้เลือก</th>
                                <th>10เมนู</th>
                            </tr>
                            <tr>
                                <th>Artwork/Banner ภาพนิ่ง</th>
                                <th>1ชิ้น เดือน</th>
                            </tr>
                            <tr>
                                <th>Re-write Content ในเว็ปไซต์</th>
                                <th>1 หน้า A4</th>
                            </tr>
                            <tr>
                                <th>โค้ต้าเปลี่ยนข้อมูล/รูปภาพ</th>
                                <th>1 ตำแหน่ง / เดือน</th>
                            </tr>
                            <tr>
                                <th>ติดTracking Code</th>
                                <th>1 Tracking Code / เดือน</th>
                            </tr>
                            <tr>
                                <th>E-Commerce</th>
                                <th>X</th>
                            </tr>
                            <tr>
                                <th>ข้อมูลสินค้า</th>
                                <th>X</th>
                            </tr>
                        @elseif ($value == '3')
                            <tr>
                                <th>URL</th>
                                <th>X</th>
                            </tr>
                            <tr>
                                <th>Domain</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>SSL let's Encrypt</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>Web Hosting</th>
                                <th>10GB</th>
                            </tr>
                            <tr>
                                <th>Respondsive</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>จำนวนภาษา</th>
                                <th>1 Language</th>
                            </tr>
                            <tr>
                                <th>โควต้าแก้ไขเว็ปไซต์</th>
                                <th>1 ครั้ง</th>
                            </tr>
                            <tr>
                                <th>จำนวนเมนูที่มีให้เลือก</th>
                                <th>15เมนู</th>
                            </tr>
                            <tr>
                                <th>Artwork/Banner ภาพนิ่ง</th>
                                <th>2ชิ้น เดือน</th>
                            </tr>
                            <tr>
                                <th>Re-write Content ในเว็ปไซต์</th>
                                <th>2 หน้า A4</th>
                            </tr>
                            <tr>
                                <th>โค้ต้าเปลี่ยนข้อมูล/รูปภาพ</th>
                                <th>2 ตำแหน่ง / เดือน</th>
                            </tr>
                            <tr>
                                <th>ติดTracking Code</th>
                                <th>2 Tracking Code / เดือน</th>
                            </tr>
                            <tr>
                                <th>E-Commerce</th>
                                <th>X</th>
                            </tr>
                            <tr>
                                <th>ข้อมูลสินค้า</th>
                                <th>X</th>
                            </tr>
                        @elseif ($value == '4')
                            <tr>
                                <th>URL</th>
                                <th>X</th>
                            </tr>
                            <tr>
                                <th>Domain</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>SSL let's Encrypt</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>Web Hosting</th>
                                <th>15GB</th>
                            </tr>
                            <tr>
                                <th>Respondsive</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>จำนวนภาษา</th>
                                <th>1 Language</th>
                            </tr>
                            <tr>
                                <th>โควต้าแก้ไขเว็ปไซต์</th>
                                <th>2 ครั้ง</th>
                            </tr>
                            <tr>
                                <th>จำนวนเมนูที่มีให้เลือก</th>
                                <th>20เมนู</th>
                            </tr>
                            <tr>
                                <th>Artwork/Banner ภาพนิ่ง</th>
                                <th>3ชิ้น เดือน</th>
                            </tr>
                            <tr>
                                <th>Re-write Content ในเว็ปไซต์</th>
                                <th>3 หน้า A4</th>
                            </tr>
                            <tr>
                                <th>โค้ต้าเปลี่ยนข้อมูล/รูปภาพ</th>
                                <th>3 ตำแหน่ง / เดือน</th>
                            </tr>
                            <tr>
                                <th>ติดTracking Code</th>
                                <th>5 Tracking Code / เดือน</th>
                            </tr>
                            <tr>
                                <th>E-Commerce</th>
                                <th>X</th>
                            </tr>
                            <tr>
                                <th>ข้อมูลสินค้า</th>
                                <th>X</th>
                            </tr>
                        @elseif ($value == '5')
                            <tr>
                                <th>URL</th>
                                <th>X</th>
                            </tr>
                            <tr>
                                <th>Domain</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>SSL let's Encrypt</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>Web Hosting</th>
                                <th>20GB</th>
                            </tr>
                            <tr>
                                <th>Respondsive</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>จำนวนภาษา</th>
                                <th>1 Language</th>
                            </tr>
                            <tr>
                                <th>โควต้าแก้ไขเว็ปไซต์</th>
                                <th>3 ครั้ง</th>
                            </tr>
                            <tr>
                                <th>จำนวนเมนูที่มีให้เลือก</th>
                                <th>25เมนู</th>
                            </tr>
                            <tr>
                                <th>Artwork/Banner ภาพนิ่ง</th>
                                <th>5ชิ้น / เดือน</th>
                            </tr>
                            <tr>
                                <th>Re-write Content ในเว็ปไซต์</th>
                                <th>5 หน้า A4</th>
                            </tr>
                            <tr>
                                <th>โค้ต้าเปลี่ยนข้อมูล/รูปภาพ</th>
                                <th>5 ตำแหน่ง / เดือน</th>
                            </tr>
                            <tr>
                                <th>ติดTracking Code</th>
                                <th>10 Tracking Code / เดือน</th>
                            </tr>
                            <tr>
                                <th>E-Commerce</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>ข้อมูลสินค้า</th>
                                <th>50 ชิ้น</th>
                            </tr>
                        @elseif ($value == '6')
                            <tr>
                                <th>URL</th>
                                <th>X</th>
                            </tr>
                            <tr>
                                <th>Domain</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>SSL let's Encrypt</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>Web Hosting</th>
                                <th>25GB</th>
                            </tr>
                            <tr>
                                <th>Respondsive</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>จำนวนภาษา</th>
                                <th>1 Language</th>
                            </tr>
                            <tr>
                                <th>โควต้าแก้ไขเว็ปไซต์</th>
                                <th>4 ครั้ง</th>
                            </tr>
                            <tr>
                                <th>จำนวนเมนูที่มีให้เลือก</th>
                                <th>35เมนู</th>
                            </tr>
                            <tr>
                                <th>Artwork/Banner ภาพนิ่ง</th>
                                <th>8ชิ้น / เดือน</th>
                            </tr>
                            <tr>
                                <th>Re-write Content ในเว็ปไซต์</th>
                                <th>10 หน้า A4</th>
                            </tr>
                            <tr>
                                <th>โค้ต้าเปลี่ยนข้อมูล/รูปภาพ</th>
                                <th>10 ตำแหน่ง / เดือน</th>
                            </tr>
                            <tr>
                                <th>ติดTracking Code</th>
                                <th>15 Tracking Code / เดือน</th>
                            </tr>
                            <tr>
                                <th>E-Commerce</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>ข้อมูลสินค้า</th>
                                <th>100 ชิ้น</th>
                            </tr>
                        @elseif  ($value == '7')
                            <tr>
                            </tr>
                            <tr>
                                <th>URL</th>
                                <th>X</th>
                            </tr>
                            <tr>
                                <th>Domain</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>SSL let's Encrypt</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>Web Hosting</th>
                                <th>30GB</th>
                            </tr>
                            <tr>
                                <th>Respondsive</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>จำนวนภาษา</th>
                                <th>1 Language</th>
                            </tr>
                            <tr>
                                <th>โควต้าแก้ไขเว็ปไซต์</th>
                                <th>5 ครั้ง</th>
                            </tr>
                            <tr>
                                <th>จำนวนเมนูที่มีให้เลือก</th>
                                <th>40เมนู</th>
                            </tr>
                            <tr>
                                <th>Artwork/Banner ภาพนิ่ง</th>
                                <th>10ชิ้น / เดือน</th>
                            </tr>
                            <tr>
                                <th>Re-write Content ในเว็ปไซต์</th>
                                <th>15 หน้า A4</th>
                            </tr>
                            <tr>
                                <th>โค้ต้าเปลี่ยนข้อมูล/รูปภาพ</th>
                                <th>15 ตำแหน่ง / เดือน</th>
                            </tr>
                            <tr>
                                <th>ติดTracking Code</th>
                                <th>20 Tracking Code / เดือน</th>
                            </tr>
                            <tr>
                                <th>E-Commerce</th>
                                <th>O</th>
                            </tr>
                            <tr>
                                <th>ข้อมูลสินค้า</th>
                                <th>200 ชิ้น</th>
                            </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
