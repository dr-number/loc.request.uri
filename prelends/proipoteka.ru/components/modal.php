<style>

    .modal {
        display: none;
        position: fixed;
        z-index: 300;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
    }

    .modal-content {
        position: relative;
        margin: auto;
        padding: 0;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }


    @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    .close {
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover{
        cursor: pointer;
    }

    .modal-header,
    .modal-body,
    .modal-footer{
        padding: 2px 16px;
    }

    .modal-body label{
       display: block;
    }

    .modal-body input{
        min-width: 200px;
        padding: 10px;
        border-width: 2px !important;
        border-radius: 0 !important;
        border-color: #f4e861;
        background-color: #000000 !important;
        background-color: rgba(0,0,0,0) !important;
    }

    .modal-button{
        max-width: 200px;
        padding: 10px;
        margin-top: 10px;
        border: 2px groove #262626;
        background-color: #f4e861;
        display: inline-block;
        font-weight: bold;
        text-transform: uppercase;
    }

    .modal-button:hover{
        cursor: pointer;
    }

    .modal-content {
        margin-top: 70px;
        text-align: center;
        animation-name: animate;
        animation-duration: 0.5s;
        background-color: white;
    }

    @keyframes animate {
        from {top:-320px; opacity:0}
        to {top:0; opacity:1}
    }

    #close-modal {
        font-size:  30px;
        font-weight:  bold;
    }

    .modal-title{
        text-transform: uppercase;
    }
    #modal-order #name{
        text-transform: capitalize;
    }
    #modal-order #bun-symbols{
        color: red;
        display: none;
    }
</style>

<div id="modal-order" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span id="close-modal" class="close">×</span>
            <div class="modal-title">Оставьте свои данные</div>
            <p>И наши менеджеры свяжутся с Вами в ближайшее время.</p>
        </div>
        <form class="modal-body" method="post">
            <label for="name">Ваше имя</label>
            <input name="name" maxlength="25" id="name" type="text" required>
            <br>
            <span id="bun-symbols">Разрешены только русские символы!</span>
            <br>
            <label for="phone">Ваш номер телефона</label>
            <input name="phone" id="phone" type="" required>
            <br>
            <button id="send-order" type="button" class="modal-button">Отправить</button>

            <p>Ваши данные не будут переданы третьим лицам.</p>
        </form>
        <div class="modal-footer">
    </div>
    </div>
</div>

<div id="modal-status" class="modal" style="display: none">
    <div class="modal-content">
        <div class="modal-header">
            <span id="close-status" class="close">×</span>
            <div class="modal-title">Информация</div>
        </div>
        <div class="modal-body">
            <p id="status-message"></p>
        </div>
        <div class="modal-footer">
        </div>
    </div>
</div>