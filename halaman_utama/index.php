<?php include 'header.php'; ?>
<style>
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh; 
}

h2 {
    font-size: 6vh;
    animation: changeColor 2.2s infinite; 
}

@keyframes changeColor {
    0% { color: red; }
    25% { color: blue; }
    50% { color: green; }
    75% { color: orange; }
    100% { color: purple; }
}

</style>
<div class="container">
    <h2 >Selamat datang </h2>
</div>
