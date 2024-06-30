<style>
    .fab-container {
        position: fixed;
        bottom: 30px;
        right: 25px;
        z-index: 999;
        cursor: pointer;
    }

    .fab-icon-holder {
        width: 50px;
        height: 50px;
        border-radius: 100%;
        background: #005db1;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .fab-icon-holder:hover {
        opacity: 0.8;
    }

    .fab-icon-holder i {
        font-size: 25px;
        color: #fff;
    }

    .fab {
        width: 60px;
        height: 60px;
        background:  #7b00ff;
    }
    
    .fab-options {
        list-style-type: none;
        margin: 0;
        position: absolute;
        bottom: 70px;
        right: 0;
        opacity: 0;
        transition: all 0.3s ease;
        transform: scale(0);
        transform-origin: 85% bottom;
    }

    .fab-container.active .fab-options {
        opacity: 1;
        transform: scale(1);
    }

    .fab-options li {
        display: flex;
        justify-content: flex-end;
        padding: 5px;
    }

    .fab-label {
        padding: 2px 5px;
        align-self: center;
        user-select: none;
        white-space: nowrap;
        border-radius: 3px;
        font-size: 16px;
        background: #005db1;
        color: #fff;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        margin-right: 10px;
    }
</style>
<div class='fab-container'>
    <div class='fab fab-icon-holder' onclick="toggleFab()">
        <i class='fa fa-plus'></i>
    </div>

    <ul class='fab-options'>
        <li>
            <span class='fab-label'>Telefon</span>
            <div class='fab-icon-holder'>
                <a href="#linkwaatdag" target="blank"><i class='fas fa-phone-alt'></i></a>
            </div>
        </li>
       
        <li>
            
            <span class='fab-label'>Form Kehadiran</span>
            <div class='fab-icon-holder'>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScqVWXIHlO50JfCs_alBUlnEJSHYM9eOg_kTyXROo-CZc4SOQ/viewform" target="blank" ><i class='fas fa-comment-alt'></i></a>
            </div>
        </li>
        
    </ul>
</div>

<script>
    function toggleFab() {
        document.querySelector('.fab-container').classList.toggle('active');
    }
</script>