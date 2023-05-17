<div class="bg-cyan-200">   
    <div class="flex justify-between items-center h-screen">
    <div id="last" onclick="firstImage()" class="mx-4 bg-yellow-300 text-black h-16 w-24 flex items-center justify-center rounded-lg ">
            <p class="font-bold text-xl scale-150 italic">&lt;--</p>
        </div>

        <div id="last" onclick="backImage()" class="mx-4 bg-yellow-300 text-black h-16 w-24 flex items-center justify-center rounded-lg "> 
            <p class="font-bold text-xl scale-150 italic">&lt;-</p>
        </div>
        
        <div>
            @foreach ($heroes as $hero)
                <img style="display: none" id="img_{{ $loop->index }}" class=" w-full h-[800px] object-cover align-middle" src="/img/heroes/{{ $hero->image }}"/>
            @endforeach
        </div>

        <div id= "next" onclick="nextImage()" class="mx-4 bg-yellow-300 text-black h-16 w-24 flex items-center justify-center rounded-lg">
           <p class="font-bold text-xl scale-150 italic">-&gt;</p>
        </div>

        <div id="last" onclick="lastImage()" class="mx-4 bg-yellow-300 text-black h-16 w-24 flex items-center justify-center rounded-lg "> 
            <p class="font-bold text-xl scale-150 italic">--&gt;</p>
        </div>
    </div>

    <script>
        selectedImage = 0;
        document.getElementById('img_' + selectedImage).style.display = 'block';
        function firstImage(){
            document.getElementById('img_' + selectedImage).style.display = 'none';
            selectedImage = 0;
            document.getElementById('img_' + selectedImage).style.display = 'block';
        }
        function nextImage() {
            document.getElementById('img_' + selectedImage).style.display = 'none';
            selectedImage++;
            if (selectedImage == {{ count($heroes)}}) 
                selectedImage = 0;
            document.getElementById('img_' + selectedImage).style.display = 'block';
        }
        function backImage(){
            document.getElementById('img_' + selectedImage).style.display = 'none';
            selectedImage--;
            if (selectedImage <= 0) 
                selectedImage = 0;
            document.getElementById('img_' + selectedImage).style.display = 'block';
        }
        function lastImage(){
            //corrigir-por a ultima foto do array
        }
    </script>    
    
</div>