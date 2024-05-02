<script></script>
<template>
    <div class=" bg-darkgrey vh-100 w-100  row d-flex flex-justify-center flex-align-center c-white">
        <div class="fluid-contaier w-100 m-0 h-100 col-12 d-flex flex-justify-center flex-align-center">
            <div>
                <!-- titolo -->
                <div class="d-flex flex-justify-center">
                    <h1>CONTACT US</h1>
                </div>
                
                <!-- input texr -->
                <!-- submit -->
                <div class="row">
                    <div class="col-5 m-32">
                        <div>
                            <input type="text-area" placeholder="dicci le tue opinioni..." class="h-40 w-100 p-16 col-12 text">
                        </div>
                        <div class="d-flex flex-justify-center m-32">
                            <input type="submit" class="bg-black c-white h-100 w-20 ">
                        </div>
                    </div>
                    <div class="col-5 m-32">
                        <h2 style="font-family:Arial, Helvetica, sans-serif;">Seleziona il tuo curriculum</h2>
                        <input type="file"   class="bg-white c-black h-50 w-100">
                    </div>
                </div>

            </div>
        </div>
     </div>
</template>
<style scoped>
*{
    font-family: "Pacifico", cursive;
    font-weight: 400;
    font-style: normal;
    font-size: 1rem;
}

h1{
    font-size: 4em;
}

.text{
    border-radius: 10em;
    border: 3px antiquewhite solid;
    height: 10rem;
    width: 35rem;
    font-size: 2rem;
}

input{
    border-radius: 1em;
}

</style>