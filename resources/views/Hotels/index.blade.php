<x-layout class="">

    <x-slot name="header">
        <div class="font-semibold text-gray-800 leading-tight">
            <hr>
            <ul class="flex nav_list">
                <li class="py-6 h">

                    <a href="/hotels">Pakistan</a>

                </li>
                <li class=" py-6 ">

                    <a href="/hotels">Hotels</a>

                </li>

                <li class=" py-6  ">
                    <a href="#">Things to do</a>

                </li>
                <li class=" py-6  ">
                    <a href="#">Restaurant</a>

                </li>
                <li class=" py-6  ">
                    <a href="#">Flghts</a>

                </li>
                <li class=" py-6 ">
                    <a href="#">Vacation Rentals</a>

                </li>


                <li class=" py-6 ">
                    <a href="#">Vacation Packages</a>

                </li>
                <li class=" py-6  ">
                    <a href="#">Cruises</a>

                </li>
                <li class=" py-6  ">
                    <a href="#">Rentel Cars</a>

                </li>
                <li class=" py-6  ">
                    <a href="#">More</a>

                </li>
                <li class=" py-6  ">
                    <a href="#">
                        ... </a>

                </li>

            </ul>
            <hr>
        </div>
        <div class="py-2 px-6">
            <h1> <a class="p-0 m-0" href="">Asia</a> <span>></span> <a class="p-0 m-0"
                    href="">Pakistan</a> <span>></span> <a class="p-0 m-0" href="">Pakistan Hotels</a> </h1>

        </div>

        <div class="header">
            <h1>Pakistan Hotels and Places to Stay
            </h1>
        </div>

        <div class="my-7 mx-7 cites border">
            <div class="my-7 mx-7 cites-list">
                <ul>
                    <li><a href="#">Lahore Hotels</a></li>
                    <li><a href="#">Islamabad Hotels</a></li>
                    <li><a href="#">Karachi Hotels</a></li>
                    <li><a href="#">Murree Hotels</a></li>
                    <li><a href="#">Rawalpindi Hotels</a></li>
                    <li><a href="#">Swat Hotels</a></li>
                    <li><a href="#">Naran Hotels</a></li>
                    <li><a href="#">Multan Hotels</a></li>
                    <li><a href="#">Skardu Hotels</a></li>
                    <li><a href="#">Hunza Hotels</a></li>
                    <li><a href="#">Mingora Hotels</a></li>
                    <li><a href="#">Peshawar Hotels</a></li>
                    <li><a href="#">Gilgit Hotels</a></li>
                    <li><a href="#">Abbottabad Hotels</a></li>
                    <li><a href="#">Nathia Gali Hotels</a></li>
                    <li><a href="#">Muzaffarabad Hotels</a></li>
                    <li><a href="#">Quetta Hotels</a></li>
                    <li><a href="#">Faisalabad Hotels</a></li>
                    <li><a href="#">Hyderabad Hotels</a></li>
                    <li><a href="#">Chitral Hotels</a></li>
                </ul>
            </div>
        </div>

    </x-slot>

</x-layout>

<style>
    .header {
        position: relative;
        background-size: cover;
        min-height: 251px;
        background-repeat: no-repeat;
        background-position: 50%;
        background-origin: content-box;
        background-image: url(https://images.unsplash.com/photo-1527824404775-dce343118ebc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80)
    }

    .header h1 {
        color: white;
        text-align: center;
        justify-content: center;
        font-size: 40px;
        padding-top: 40px;
    }

    .cites {
        min-height: 250px;
    }

    .h {
        margin-left: 30px
    }

    .nav li {
        margin-left: 5px;
        border: 1px solid #000;
        border-radius: 20px;
        font-size: 1.1rem;
        margin-bottom: 7px;
        cursor: pointer;

    }

    .nav_list a:hover,
    .nav_list a:focus {
        border-bottom: 3px solid #007bff
    }


    a {
        color: #000;
        margin-right: 30px;
    }

    ul li {
        float: left;
        width: 50%;
        /* font-size: 12px; */
    }

    .cites-list li {
        width: 25%;
    }
</style>
