<style>
    .background{
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.3);
        z-index: 1000;

        z-index: -1;
        opacity: 0;
    }
    .window{
        position: relative;
        width: 100%;
        height: 100%;
    }
    .popup{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #ffffff;
        box-shadow: 0 2px 7px rgba(0, 0, 0, 0.3);

        width: 500px;
        height: 500px;
    }
    .show{
        opacity: 1;
        z-index: 1000;
        transition: all 0.5s;
    }
    .error{
        color: red;
        text-align: center;
    }
    .info{
        color: black;
        text-align: center;
    }
</style>

<div class="background">
    <div class="window">
        <div class="popup">
            <div style="text-align: right;">
                <button id="close">X</button>
            </div>
            <p class="{{ $type }}">{{ $message }}</p>
        </div>
    </div>
</div>

<script>
    function close(){
        document.querySelector('.background').className = "background";
    }
    document.querySelector('#close').addEventListener('click', close);
</script>
