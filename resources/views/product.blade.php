<x-x-layout>
   <div class="container flex-1  ">
       <div>
       <x-product :product="$product" class="col-16"/>
</div>

       <div class=" p-2 m-4">
           <x-Suggested :laptops="$laptops"/>

       </div>
   </div>
</x-x-layout>
