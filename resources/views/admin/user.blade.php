<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                User:

                                


                                  
                                        
                                    

                                    <!-- component -->
                                <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet" />

                                <style>
                                    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap");
                                    body{
                                        font-family: "Roboto", sans-serif;
                                    }
                                </style>

                                <!-- This is an example component -->

                                <div class='flex flex-col items-center justify-center min-h-screen p-16 bg-slate-200'>
                                    <h1 class="my-10 font-medium text-3xl sm:text-4xl font-black">
                                        Utilisateurs
                                    </h1>

                                    <div class='user-list w-full max-w-lg mx-auto bg-white rounded-xl shadow-xl flex flex-col py-4'>
                                     @foreach ($users as $user)
                                        <!--User row -->
                                        <div class="user-row flex flex-col items-center justify-between cursor-pointer  p-4 duration-300 sm:flex-row sm:py-4 sm:px-8 hover:bg-[#f6f8f9]">
                                            <div class="user flex items-center text-center flex-col sm:flex-row sm:text-left">
                                                <div class="avatar-content mb-2.5 sm:mb-0 sm:mr-2.5">
                                                    <img class="avatar w-20 h-20 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg"/>
                                                </div>
                                                <div class="user-body flex flex-col mb-4 sm:mb-0 sm:mr-4">
                                                    <a href="#" class="title font-medium no-underline">{{$user->name}}</a>
                                                    <div class="skills flex flex-col">
                                                        <span class="subtitle text-slate-500">{{$user->email}}</span>

                                                       
                                                        <span class="subtitle text-slate-500">Id:{{$user->id}}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            @if ($user->admin==1)
                                                <!--Button content -->
                                            <div class="user-option mx-auto sm:ml-auto sm:mr-0">
                                                <a href="{{route("admin.user-right", ["id"=>$user->id])}}" class="btn inline-block select-none no-underline align-middle cursor-pointer whitespace-nowrap px-4 py-1.5 rounded text-base font-medium leading-6 tracking-tight text-white text-center border-0 bg-[#e72a11] hover:bg-[#cb870a] duration-300" type="button">{{$user->admin}}</a>
                                            </div>
                                            <!--Close Button content -->
                                            @else
                                                <!--Button content -->
                                            <div class="user-option mx-auto sm:ml-auto sm:mr-0">
                                                <a href="{{route("admin.user-right", ["id"=>$user->id])}}" class="btn inline-block select-none no-underline align-middle cursor-pointer whitespace-nowrap px-4 py-1.5 rounded text-base font-medium leading-6 tracking-tight text-white text-center border-0 bg-[#6911e7] hover:bg-[#590acb] duration-300" type="button ">{{$user->admin}}</a>
                                            </div>
                                            <!--Close Button content -->
                                            @endif
                                            
                                        </div>
                                        <!--User row -->
                                        @endforeach
                                        <a class="show-more block w-10/12 mx-auto py-2.5 px-4 text-center no-underline rounded hover:bg-[#f6f8f9] font-medium duration-300" href="#/">Pagination</a>
                                    </div>
                                </div>
                                
                                






                            </div>
                    </div>
            </div>
    </div>
</x-app-layout>
