<style>
    .main{
        display: flex;
        justify-content: center;
        align-items: center;
        /* background-color: rgb(95, 173, 241); */
        height: 70vh;
        width: 100vw;
    }
    .card_container{
        position: relative;
        width: 80%;
        height: 100%;
        /* border: 1px solid red; */
        display: grid;
        grid-template-columns: repeat(2,50%);
        grid-template-rows: repeat(2,60%);
        /* align-items: center; */
        gap: 20px;
    }
    .card{
        border-radius: 20px ;
    }
    .card1{
        background-image: url("https://ld-wt73.template-help.com/wt_prod-28718/images/page-1_img01.jpg");
    }
    .card2{
        background-image: url("https://ld-wt73.template-help.com/wt_prod-28718/images/page-1_img02.jpg");
    }
      .card3{
        background-image: url("https://ld-wt73.template-help.com/wt_prod-28718/images/page-1_img03.jpg");
    }
    .card4{
        background-image: url("https://ld-wt73.template-help.com/wt_prod-28718/images/page-1_img04.jpg");
    }
    .layer{
        border-radius: 20px ;

        position: relative;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        &:hover{
            background: linear-gradient(270deg, rgba(255, 255, 255, 0.5),#FC5A0A);
        }
    }
    
</style>
<div class="main">
    <div class="card_container p-4">
        <div class="card card1  ">
            <div class="layer p-4 flex flex-col justify-center">
                <h1 class="text-4xl uppercase font-semibold text-white">
                    DUCTING
                   </h1>
                   <p class=" text-white">
                    Our custom fabricated stainless steel ducting products are highly reliable and distributed across the world.
                   </p>
            </div>
           
        </div>
        <div class="card card2">
            <div class="layer p-4 flex flex-col justify-center">
                <h1 class="text-4xl uppercase font-semibold text-white">
                    
                    STACKS
                   </h1>
                   <p class=" text-white">
                    Our stacks are designed to maintain air quality emissions in compliance with modern requirements for your facility.
                   </p>
            </div>
        </div>
        <div class="card card3">
            <div class="layer p-4 flex flex-col justify-center">
                <h1 class="text-4xl uppercase font-semibold text-white">
                    
                    STACKS
                   </h1>
                   <p class=" text-white">
                    Our stacks are designed to maintain air quality emissions in compliance with modern requirements for your facility.
                   </p>
            </div>
        </div>
        <div class="card card4">
            <div class="layer p-4 flex flex-col justify-center">
                <h1 class="text-4xl uppercase font-semibold text-white">
                    
                    STACKS
                   </h1>
                   <p class=" text-white">
                    Our stacks are designed to maintain air quality emissions in compliance with modern requirements for your facility.
                   </p>
            </div>
        </div>
    </div>
</div>
<script>
    gsap.from('.card1',{
        x:-1000,
        opacity:0,
        duration:1.5,
        stagger:0.5,
       
    })
    gsap.from('.card2',{
        x:1000,
        opacity:0,
        duration:1.5,
        stagger:0.5,
        
    })
    gsap.from('.card3',{
        x:-1000,
        opacity:0,
        duration:1.5,
        stagger:0.5,
        
    })
    gsap.from('.card4',{
        x:1000,
        opacity:0,
        duration:1.5,
        stagger:0.5,
       
    })
   
</script>