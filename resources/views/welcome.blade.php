@extends('layouts.init')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 d-flex d-md-none justify-content-end" style="height:50vh">
            <img src="{{asset("img/undraw_Dark_analytics_re_2kvy.svg")}}" class="w-100" alt="" style="margin-top:-61px;z-index:-1020;">
        </div>
        <div class="col-md-6 d-flex d-md-none mb-5">
            <div class="position-relative">
                <div class="display-3 font-weight-bold">Lexachange cangea e intergra en tus Apps</div>
                <div class="pl-4 pt-3">
                    <a href="{{url("documentacion")}}" class="btn btn-warning">Documentacion</a>
                    <a href="{{url("register")}}" class="btn btn-light">Registrate</a>
                </div>
                <div class="position-absolute" style="width: 70%;top: -34%;left: -33%;z-index:-1020;">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                       <path fill="#FD906B" d="M29.2,-42.7C41.6,-31.2,58.1,-27.7,62.6,-19.1C67.1,-10.5,59.6,3.2,55,18C50.3,32.7,48.5,48.5,39.8,59.8C31.1,71.2,15.6,78.1,-1.1,79.6C-17.7,81,-35.4,77.1,-42.4,65.2C-49.5,53.3,-45.8,33.5,-47.3,17.9C-48.9,2.4,-55.6,-8.9,-57.5,-23.6C-59.5,-38.2,-56.7,-56.3,-46.4,-68.4C-36,-80.6,-18,-87,-4.8,-80.4C8.4,-73.8,16.8,-54.2,29.2,-42.7Z" transform="translate(100 100)" />
                   </svg>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-none d-md-flex align-items-center" style="height:80vh">
            <div class="position-relative">
                <div class="display-3 font-weight-bold">Lexachange cangea e intergra en tus Apps</div>
                <div class="pl-4 pt-3">
                    <a href="{{url("documentacion")}}" class="btn btn-warning">Documentacion</a>
                    <a href="{{url("register")}}" class="btn btn-light">Registrate</a>
                </div>
                <div class="position-absolute" style="width: 70%;top: -34%;left: -33%;z-index:-1020;">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                       <path fill="#FD906B" d="M29.2,-42.7C41.6,-31.2,58.1,-27.7,62.6,-19.1C67.1,-10.5,59.6,3.2,55,18C50.3,32.7,48.5,48.5,39.8,59.8C31.1,71.2,15.6,78.1,-1.1,79.6C-17.7,81,-35.4,77.1,-42.4,65.2C-49.5,53.3,-45.8,33.5,-47.3,17.9C-48.9,2.4,-55.6,-8.9,-57.5,-23.6C-59.5,-38.2,-56.7,-56.3,-46.4,-68.4C-36,-80.6,-18,-87,-4.8,-80.4C8.4,-73.8,16.8,-54.2,29.2,-42.7Z" transform="translate(100 100)" />
                   </svg>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-none d-md-flex" style="height:80vh">
            <img src="{{asset("img/undraw_Dark_analytics_re_2kvy.svg")}}" class="w-100" alt="" srcset="">
        </div>
    </div>
</div>
<div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f8f9fa" fill-opacity="1" d="M0,96L14.1,106.7C28.2,117,56,139,85,165.3C112.9,192,141,224,169,234.7C197.6,245,226,235,254,218.7C282.4,203,311,181,339,181.3C367.1,181,395,203,424,192C451.8,181,480,139,508,128C536.5,117,565,139,593,154.7C621.2,171,649,181,678,192C705.9,203,734,213,762,208C790.6,203,819,181,847,160C875.3,139,904,117,932,128C960,139,988,181,1016,176C1044.7,171,1073,117,1101,122.7C1129.4,128,1158,192,1186,234.7C1214.1,277,1242,299,1271,261.3C1298.8,224,1327,128,1355,122.7C1383.5,117,1412,203,1426,245.3L1440,288L1440,320L1425.9,320C1411.8,320,1384,320,1355,320C1327.1,320,1299,320,1271,320C1242.4,320,1214,320,1186,320C1157.6,320,1129,320,1101,320C1072.9,320,1045,320,1016,320C988.2,320,960,320,932,320C903.5,320,875,320,847,320C818.8,320,791,320,762,320C734.1,320,706,320,678,320C649.4,320,621,320,593,320C564.7,320,536,320,508,320C480,320,452,320,424,320C395.3,320,367,320,339,320C310.6,320,282,320,254,320C225.9,320,198,320,169,320C141.2,320,113,320,85,320C56.5,320,28,320,14,320L0,320Z"></path>
      </svg>
</div>
<div class="bg-light py-3">
    <div class="container py-5">
        <div class="row pt-4">
            <div class="col-md-3 col-sm-6 mb-mb-0 mb-3 d-flex">
                <div class="bg-md-white md-shadow-sm hover:shadow p-3 text-center">
                    <img src="{{asset("img/undraw_make_it_rain_iwk4.svg")}}" class="w-100" style="height: 6rem" alt="">
                    <h5 class="text-dark pt-4 font-weight-bold text-uppercase">Cangea</h5>
                    <small class="text-secondary text-uppercasex">Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-mb-0 mb-3 d-flex">
                <div class="bg-md-white md-shadow-sm hover:shadow p-3 text-center">
                    <img src="{{asset("img/undraw_Bitcoin_P2P_re_1xqa.svg")}}" class="w-100" style="height: 6rem" alt="">
                    <h5 class="text-dark pt-4 font-weight-bold text-uppercase">Paga</h5>
                    <small class="text-secondary text-uppercasex">Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-mb-0 mb-3 d-flex">
                <div class="bg-md-white md-shadow-sm hover:shadow p-3 text-center">
                    <img src="{{asset("img/undraw_Sharing_articles_re_jnkp.svg")}}" class="w-100" style="height: 6rem" alt="">
                    <h5 class="text-dark pt-4 font-weight-bold text-uppercase">Recibe</h5>
                    <small class="text-secondary text-uppercasex">Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-mb-0 mb-3 d-flex">
                <div class="bg-md-white md-shadow-sm hover:shadow p-3 text-center">
                    <img src="{{asset("img/undraw_App_wireframe_re_d467.svg")}}" class="w-100" style="height: 6rem" alt="">
                    <h5 class="text-dark pt-4 font-weight-bold text-uppercase">Incorporalo en tu app</h5>
                    <small class="text-secondary text-uppercasex">Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f8f9fa" fill-opacity="1" d="M0,96L14.1,128C28.2,160,56,224,85,218.7C112.9,213,141,139,169,112C197.6,85,226,107,254,112C282.4,117,311,107,339,117.3C367.1,128,395,160,424,154.7C451.8,149,480,107,508,112C536.5,117,565,171,593,176C621.2,181,649,139,678,138.7C705.9,139,734,181,762,165.3C790.6,149,819,75,847,42.7C875.3,11,904,21,932,32C960,43,988,53,1016,80C1044.7,107,1073,149,1101,154.7C1129.4,160,1158,128,1186,144C1214.1,160,1242,224,1271,250.7C1298.8,277,1327,267,1355,240C1383.5,213,1412,171,1426,149.3L1440,128L1440,0L1425.9,0C1411.8,0,1384,0,1355,0C1327.1,0,1299,0,1271,0C1242.4,0,1214,0,1186,0C1157.6,0,1129,0,1101,0C1072.9,0,1045,0,1016,0C988.2,0,960,0,932,0C903.5,0,875,0,847,0C818.8,0,791,0,762,0C734.1,0,706,0,678,0C649.4,0,621,0,593,0C564.7,0,536,0,508,0C480,0,452,0,424,0C395.3,0,367,0,339,0C310.6,0,282,0,254,0C225.9,0,198,0,169,0C141.2,0,113,0,85,0C56.5,0,28,0,14,0L0,0Z"></path>
      </svg>
</div>
<div class="container pt-5">
    <div class="row pt-4">
        <div class="col-md-6 d-flex d-md-none">
            <img src="{{asset("img/undraw_Data_re_80ws.svg")}}" class="w-100" alt="" srcset="">
        </div>
        <div class="col-md-6 position-relative">
            <h2 class="font-weight-bold">Emprende con Lecachange</h2>
            <small class="text-warning">Compra lexas y empieza en el mundo de las criptomonedas</small>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, odit voluptates quos tempora aut corrupti. Quis dicta labore illum nam commodi tempora ipsum, aspernatur consectetur perferendis. Neque sed harum esse.</p>
            <div class="position-absolute d-none d-md-flex" style="width: 66%;bottom: -12%;left: 0;z-index: -1020;">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#FD906B" d="M23,-32.3C31.1,-25.7,39.8,-20.8,43.7,-13.2C47.6,-5.6,46.6,4.6,44.1,15C41.7,25.4,37.8,36.1,30.2,45.1C22.6,54.1,11.3,61.5,1.1,60C-9.1,58.5,-18.3,48.1,-29.1,40.2C-40,32.2,-52.5,26.7,-54.7,18.2C-57,9.6,-49,-1.8,-47.6,-18.4C-46.2,-34.9,-51.5,-56.5,-44.6,-63.4C-37.8,-70.3,-18.9,-62.6,-5.7,-54.8C7.4,-46.9,14.9,-38.8,23,-32.3Z" transform="translate(100 100)" />
                  </svg>
            </div>
        </div>
        <div class="col-md-6 d-none d-md-flex">
            <img src="{{asset("img/undraw_Data_re_80ws.svg")}}" class="w-100" alt="" srcset="">
        </div>
    </div>
</div>
<div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f8f9fa" fill-opacity="1" d="M0,96L14.1,106.7C28.2,117,56,139,85,165.3C112.9,192,141,224,169,234.7C197.6,245,226,235,254,218.7C282.4,203,311,181,339,181.3C367.1,181,395,203,424,192C451.8,181,480,139,508,128C536.5,117,565,139,593,154.7C621.2,171,649,181,678,192C705.9,203,734,213,762,208C790.6,203,819,181,847,160C875.3,139,904,117,932,128C960,139,988,181,1016,176C1044.7,171,1073,117,1101,122.7C1129.4,128,1158,192,1186,234.7C1214.1,277,1242,299,1271,261.3C1298.8,224,1327,128,1355,122.7C1383.5,117,1412,203,1426,245.3L1440,288L1440,320L1425.9,320C1411.8,320,1384,320,1355,320C1327.1,320,1299,320,1271,320C1242.4,320,1214,320,1186,320C1157.6,320,1129,320,1101,320C1072.9,320,1045,320,1016,320C988.2,320,960,320,932,320C903.5,320,875,320,847,320C818.8,320,791,320,762,320C734.1,320,706,320,678,320C649.4,320,621,320,593,320C564.7,320,536,320,508,320C480,320,452,320,424,320C395.3,320,367,320,339,320C310.6,320,282,320,254,320C225.9,320,198,320,169,320C141.2,320,113,320,85,320C56.5,320,28,320,14,320L0,320Z"></path>
      </svg>
</div>
<div class="bg-light position-relative">
    <div class="position-absolute" style="width: 20%;bottom: 2%;left: 0;">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
           <path fill="#FD906B" d="M29.2,-42.7C41.6,-31.2,58.1,-27.7,62.6,-19.1C67.1,-10.5,59.6,3.2,55,18C50.3,32.7,48.5,48.5,39.8,59.8C31.1,71.2,15.6,78.1,-1.1,79.6C-17.7,81,-35.4,77.1,-42.4,65.2C-49.5,53.3,-45.8,33.5,-47.3,17.9C-48.9,2.4,-55.6,-8.9,-57.5,-23.6C-59.5,-38.2,-56.7,-56.3,-46.4,-68.4C-36,-80.6,-18,-87,-4.8,-80.4C8.4,-73.8,16.8,-54.2,29.2,-42.7Z" transform="translate(100 100)" />
       </svg>
    </div>
    <div class="position-absolute" style="width: 15%;bottom: 45%;right: 3%;">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#FD906B" d="M41.4,-54.8C54.5,-47.5,66.6,-36.5,64.3,-25.3C61.9,-14,45.1,-2.4,40.2,13.2C35.3,28.7,42.3,48.2,37.5,62.1C32.8,76,16.4,84.1,0.4,83.5C-15.5,82.9,-31.1,73.6,-45.5,62.9C-60,52.2,-73.3,40.2,-78.1,25.4C-82.9,10.6,-79.1,-6.9,-72.4,-22.3C-65.8,-37.7,-56.2,-50.9,-43.6,-58.4C-31.1,-65.9,-15.5,-67.7,-0.7,-66.8C14.2,-65.8,28.3,-62.1,41.4,-54.8Z" transform="translate(100 100)" />
          </svg>
    </div>
    <div class="container pt-5">
        <div>
            <div class="text-center mb-5">
                <h3 class="font-weight-bold">Cotizaciones de Criptomonedas más Populares</h3>
                <small class="text-warning">Compra lexas y empieza en el mundo de las criptomonedas</small>
            </div>
            <table class="table table-striped table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>Moneda</th>
                        <th>Precio</th>
                        <th>Cotizacion</th>
                        <th>%</th>
                        <th>Bolsa</th>
                        <th>Mecado</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Bitcoin</td>
                            <td>34,7294$</td>
                            <td>35,870$</td>
                            <td>56,4%</td>
                            <td>1,234,560$</td>
                            <td>9,234,560$</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Etherium</td>
                            <td>2,7294$</td>
                            <td>34,870$</td>
                            <td>20,4%</td>
                            <td>3,234,560$</td>
                            <td>4,234,560$</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Litecoin</td>
                            <td>294$</td>
                            <td>870$</td>
                            <td>6,4%</td>
                            <td>4,234,560$</td>
                            <td>7,234,560$</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Tron</td>
                            <td>94$</td>
                            <td>5,870$</td>
                            <td>2,4%</td>
                            <td>3,234,560$</td>
                            <td>9,234,560$</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Dodgecoin</td>
                            <td>2,7294$</td>
                            <td>5,870$</td>
                            <td>1,2%</td>
                            <td>934,560$</td>
                            <td>2,234,560$</td>
                        </tr>
                    </tbody>
            </table>
        </div>
    </div>
    <div class="container mt-3 pt-5">
        <div class="row m-0">
            <div class="col-md-6">
                <img src="{{asset("img/undraw_Growth_analytics_re_pyxf.svg")}}" alt="" class="w-100" srcset="">
            </div>
            <div class="col-md-6">
                <div style="margin-top: 100px;">
                    <h3 class="font-weight-bold">Haz tu tienda y expandela con Lexachange</h3>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est minus, minima accusantium doloremque sunt quas fugit molestiae iusto laboriosam. Molestiae provident perspiciatis, hic necessitatibus aliquam maxime tenetur quis numquam corrupti.</p>
                </div>
            </div>
            <div class="col-md-6 d-flex d-md-none">
                <div style="margin-top: 100px;">
                    <img src="{{asset("img/undraw_maker_launch_crhe.svg")}}" alt="" class="w-100" srcset="">
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <h3 class="font-weight-bold">Haz que tu tienda tenga grandes ingresos</h3>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est minus, minima accusantium doloremque sunt quas fugit molestiae iusto laboriosam. Molestiae provident perspiciatis, hic necessitatibus aliquam maxime tenetur quis numquam corrupti.</p>
                </div>
            </div>
            <div class="col-6 d-none d-md-flex">
                <div style="margin-top: 100px;">
                    <img src="{{asset("img/undraw_maker_launch_crhe.svg")}}" alt="" class="w-100" srcset="">
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f8f9fa" fill-opacity="1" d="M0,96L14.1,128C28.2,160,56,224,85,218.7C112.9,213,141,139,169,112C197.6,85,226,107,254,112C282.4,117,311,107,339,117.3C367.1,128,395,160,424,154.7C451.8,149,480,107,508,112C536.5,117,565,171,593,176C621.2,181,649,139,678,138.7C705.9,139,734,181,762,165.3C790.6,149,819,75,847,42.7C875.3,11,904,21,932,32C960,43,988,53,1016,80C1044.7,107,1073,149,1101,154.7C1129.4,160,1158,128,1186,144C1214.1,160,1242,224,1271,250.7C1298.8,277,1327,267,1355,240C1383.5,213,1412,171,1426,149.3L1440,128L1440,0L1425.9,0C1411.8,0,1384,0,1355,0C1327.1,0,1299,0,1271,0C1242.4,0,1214,0,1186,0C1157.6,0,1129,0,1101,0C1072.9,0,1045,0,1016,0C988.2,0,960,0,932,0C903.5,0,875,0,847,0C818.8,0,791,0,762,0C734.1,0,706,0,678,0C649.4,0,621,0,593,0C564.7,0,536,0,508,0C480,0,452,0,424,0C395.3,0,367,0,339,0C310.6,0,282,0,254,0C225.9,0,198,0,169,0C141.2,0,113,0,85,0C56.5,0,28,0,14,0L0,0Z"></path>
      </svg>
</div>
{{-- <div class="container mt-3 pt-5">
    <div class="pt-4">
        <h2 class="font-weight-bold text-center">Sistemas que usan Lexachange</h2>
        <div class="row m-0">
            <div class="col-3">
                <div style="height:7rem" class="shadow-sm d-flex justify-content-center align-items-center mb-3">
                    <div>
                        <div class="text-center h1 m-0">M&P</div>
                        Mors Periodic
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div style="height:7rem" class="shadow-sm d-flex justify-content-center align-items-center mb-3">
                    <div>
                        <div class="text-center h1 m-0">E</div>
                        Expresso
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div style="height:7rem" class="shadow-sm d-flex justify-content-center align-items-center mb-3">
                    <div>
                        <div class="text-center h1 m-0">R</div>
                        Raptor
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div style="height:7rem" class="shadow-sm d-flex justify-content-center align-items-center mb-3">
                    <div>
                        <div class="text-center h1 m-0">J</div>
                        Juventudes
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div style="height:7rem" class="shadow-sm d-flex justify-content-center align-items-center mb-3">
                    <div>
                        <div class="text-center h1 m-0">Hy</div>
                        Harmony
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div style="height:7rem" class="shadow-sm d-flex justify-content-center align-items-center mb-3">
                    <div>
                        <style type="text/css">div.image {max-width: 256px;max-height: 256px;background-image: url(data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgaWQ9IlIiPjxwYXRoIGQ9Im0zNDkuODk5IDMxMy41di0uM2MtNy41LTcuOC0xNS41OTktMTUuNjAxLTI1LjE5OS0yMy4xMDEgNjUuNC0yMC43IDEwMS45OTktNzAuNDk5IDEwMS45OTktMTQwLjQgMC02Mi45OTktMzMuMy0xMTYuMS04NC42LTEzNS45MDEtMjQuNTk4LTkuMjk5LTYxLjgtMTMuNzk4LTExNC0xMy43OThoLTE5Mi41OTl2NTEyaDEyNC4ydi0yMDIuMTAxYzM2LjcxMSAwIDM0Ljg1NCA1Ljg5NSA0Ny45OTkgMjAuMTAxIDE1LjMxMiAxNi43MzUgNjcuMDg5IDk4LjQ1OSAxMjAuOTAxIDE4MmgxNDcuOWMtNjAuODY0LTEwMS40NzMtMTA0LjY1NC0xNzQuMzkxLTEyNi42MDEtMTk4LjV6bS0xOTAuMTk5LTIwMi4yMDFjMjYuMjA2LS4wODQgOTIuMzA1LS40MzcgMTA0LjA5OSAxLjIwMSAyMy43MDEgNC4yIDM1LjcgMTguNiAzNS43IDQzLjIgMCAyMS41OTktOSAzNi4yOTktMjYuMSA0Mi4yOTktMTkuMzQ5IDYuOTEyLTg2LjQ0MSA0LjgwMS0xMTMuNjk5IDQuODAxeiIvPjwvZz48L3N2Zz4=)}</style>
                        Roulex
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container mt-3 pt-5 d-flex justify-content-center">
    <form action="{{url('send_consulta')}}" method="post" class="w-75 row">
        <div class="col-12 mb-4">
            <h2 class="text-center font-weight-bold">Consulta con nosotros</h2>
        </div>
        <div class="col-md-6 mb-4">
            @csrf
            <input type="text" class="form-control p-4" name="name" placeholder="Nombres">
        </div>
        <div class="col-md-6 mb-4">
            <input type="text" class="form-control p-4" name="email" placeholder="Correo">
        </div>
        <div class="col-md-6 mb-4">
            <input type="text" class="form-control p-4" name="phone" placeholder="Telefono">
        </div>
        <div class="col-md-6 mb-4">
            <textarea name="caso" class="form-control p-3" placeholder="Expon tu caso" cols="30" rows="1"></textarea>
        </div>
        <div class="col-12 d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-warning btn-lg">Enviar</button>
        </div>
    </form>
</div>
<div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f8f9fa" fill-opacity="1" d="M0,256L14.1,245.3C28.2,235,56,213,85,208C112.9,203,141,213,169,218.7C197.6,224,226,224,254,197.3C282.4,171,311,117,339,96C367.1,75,395,85,424,128C451.8,171,480,245,508,245.3C536.5,245,565,171,593,160C621.2,149,649,203,678,197.3C705.9,192,734,128,762,101.3C790.6,75,819,85,847,112C875.3,139,904,181,932,181.3C960,181,988,139,1016,144C1044.7,149,1073,203,1101,224C1129.4,245,1158,235,1186,224C1214.1,213,1242,203,1271,208C1298.8,213,1327,235,1355,234.7C1383.5,235,1412,213,1426,202.7L1440,192L1440,320L1425.9,320C1411.8,320,1384,320,1355,320C1327.1,320,1299,320,1271,320C1242.4,320,1214,320,1186,320C1157.6,320,1129,320,1101,320C1072.9,320,1045,320,1016,320C988.2,320,960,320,932,320C903.5,320,875,320,847,320C818.8,320,791,320,762,320C734.1,320,706,320,678,320C649.4,320,621,320,593,320C564.7,320,536,320,508,320C480,320,452,320,424,320C395.3,320,367,320,339,320C310.6,320,282,320,254,320C225.9,320,198,320,169,320C141.2,320,113,320,85,320C56.5,320,28,320,14,320L0,320Z"></path>
      </svg>
</div>
<div class="bg-light position-relative">
    <div class="position-absolute d-none d-md-flex" style="top: -22%;right: 0;width: 23%">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#FD906B" d="M41.4,-54.8C54.5,-47.5,66.6,-36.5,64.3,-25.3C61.9,-14,45.1,-2.4,40.2,13.2C35.3,28.7,42.3,48.2,37.5,62.1C32.8,76,16.4,84.1,0.4,83.5C-15.5,82.9,-31.1,73.6,-45.5,62.9C-60,52.2,-73.3,40.2,-78.1,25.4C-82.9,10.6,-79.1,-6.9,-72.4,-22.3C-65.8,-37.7,-56.2,-50.9,-43.6,-58.4C-31.1,-65.9,-15.5,-67.7,-0.7,-66.8C14.2,-65.8,28.3,-62.1,41.4,-54.8Z" transform="translate(100 100)" />
          </svg>
    </div>
    <div class="position-absolute" style="top: 48%;right: 35%;width: 19%">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#FD906B" d="M41.4,-54.8C54.5,-47.5,66.6,-36.5,64.3,-25.3C61.9,-14,45.1,-2.4,40.2,13.2C35.3,28.7,42.3,48.2,37.5,62.1C32.8,76,16.4,84.1,0.4,83.5C-15.5,82.9,-31.1,73.6,-45.5,62.9C-60,52.2,-73.3,40.2,-78.1,25.4C-82.9,10.6,-79.1,-6.9,-72.4,-22.3C-65.8,-37.7,-56.2,-50.9,-43.6,-58.4C-31.1,-65.9,-15.5,-67.7,-0.7,-66.8C14.2,-65.8,28.3,-62.1,41.4,-54.8Z" transform="translate(100 100)" />
          </svg>
    </div>
    <div class="position-absolute d-none d-md-flex" style="top: -13%;left: 0%;width: 33%">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#FD906B" d="M23,-32.3C31.1,-25.7,39.8,-20.8,43.7,-13.2C47.6,-5.6,46.6,4.6,44.1,15C41.7,25.4,37.8,36.1,30.2,45.1C22.6,54.1,11.3,61.5,1.1,60C-9.1,58.5,-18.3,48.1,-29.1,40.2C-40,32.2,-52.5,26.7,-54.7,18.2C-57,9.6,-49,-1.8,-47.6,-18.4C-46.2,-34.9,-51.5,-56.5,-44.6,-63.4C-37.8,-70.3,-18.9,-62.6,-5.7,-54.8C7.4,-46.9,14.9,-38.8,23,-32.3Z" transform="translate(100 100)" />
        </svg>
    </div>
    <footer class="container">
        <div class="row m-0">
            <div class="col-12">
                <h1 class="font-weight-bold">Lexachange</h1>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4 class="font-weight-bold">Contactos</h4>
                <p class="mb-0"><small>+58 4120000000</small></p>
                <p class="mb-0"><small>andres03ruht@gmail.com</small></p>
                <p class="mb-0">
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia id enim hic quasi tempora eveniet animi </small>
                </p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4 class="font-weight-bold">Apps</h4>
                <p class="mb-0"><small>Iphone</small></p>
                <p class="mb-0"><small>Android</small></p>
                <p class="mb-0">
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia id enim hic quasi tempora eveniet animi </small>
                </p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4 class="font-weight-bold">Politicas</h4>
                <p class="mb-0"><small>Politicas de privacidad</small></p>
                <p class="mb-0"><small>Politicas de uso</small></p>
                <p class="mb-0">
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia id enim hic quasi tempora eveniet animi </small>
                </p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4 class="font-weight-bold">Api</h4>
                <p class="mb-0"><small>Documentacion</small></p>
                <p class="mb-0"><small>Implementacion</small></p>
                <p class="mb-0"><small>Repositorio</small></p>
                <p class="mb-0"><small>Desarrolladores</small></p>
            </div>
            <div class="col-12 mt-5">
                <span class="mr-3">Facebook</span>
                <span class="mr-3">Instagram</span>
                <span class="mr-3">Telegram</span>
                <span class="mr-3">Linkedin</span>
            </div>
            <div class="col-12 mt-2 mb-4">
                <hr>
                <div class="text-center">&copy; Andres Marquez 2021</div>
            </div>
        </div>
    </footer>
</div>
@endsection
