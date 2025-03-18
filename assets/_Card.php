<style>
    .main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 70vh;
        width: 100vw;
    }
    .card_container {
        position: relative;
        width: 90%;
        height: 100%;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: auto;
        gap: 20px;
    }
    .card {
        border-radius: 20px;
        background-size: cover;
        background-position: center;
    }
    .card1 { background-image: url("./home1.jpg"); }
    .card2 { background-image: url("./home2.jpg"); }
    .card3 { background-image: url("./home3.jpg"); }
    .card4 { background-image: url("./home4.jpg"); }
    .layer {
        border-radius: 20px;
        position: relative;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }
    .layer:hover {
        background: linear-gradient(270deg, rgba(255, 255, 255, 0.5), #FC5A0A);
    }
    
    @media (max-width: 768px) {
        .card_container {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="main">
    <div class="card_container p-4">
        <div class="card card1">
            <div class="layer p-4 flex flex-col justify-center">
                <h1 class="text-4xl uppercase font-semibold text-white">Plasma coating process</h1>
            </div>
        </div>
        <div class="card card2">
            <div class="layer p-4 flex flex-col justify-center">
                <h1 class="text-4xl uppercase font-semibold text-white">Ceramic coating</h1>
            </div>
        </div>
        <div class="card card3">
            <div class="layer p-4 flex flex-col justify-center">
                <h1 class="text-4xl uppercase font-semibold text-white">Thermal spray process</h1>
            </div>
        </div>
        <div class="card card4">
            <div class="layer p-4 flex flex-col justify-center">
                <h1 class="text-4xl uppercase font-semibold text-white">Thermal spray process</h1>
            </div>
        </div>
    </div>
</div>

