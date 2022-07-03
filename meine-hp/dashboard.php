<?php
include("header.php");
?>
    <div id="editicon">
            <span class="material-symbols-outlined"></span>
        </div>
    </div>
    <div id="content">
        <div id="sidebar" class="sidebarshow">
            <div id="sidebartop">
                <p>Select panels</p>
                <div id="cross">
                    <div id="line1"></div>
                    <div id="line2"></div>
                </div>
            </div>

            <div id="sidebarcontent">

                <div class="category">
                    <p>Bar-Chart</p>
                    <div class="options">
                        <div class="option">
                            <p>option</p>
                            <input type="checkbox">
                        </div>
                        <div class="option">
                            <p>option 2</p>
                            <input type="checkbox">
                        </div>
                        <div class="option">
                            <p>option 3</p>
                            <input type="checkbox">
                        </div>
                    </div>
                </div>
                <div class="category">
                    <p>Line-Chart</p>
                    <div class="options">
                        <div class="option">
                            <p>option</p>
                            <input type="checkbox">
                        </div>
                        <div class="option">
                            <p>option 2</p>
                            <input type="checkbox">
                        </div>
                        <div class="option">
                            <p>option 3</p>
                            <input type="checkbox">
                        </div>
                    </div>
                </div>
                <div class="category">
                    <p>Pie-Chart</p>
                    <div class="options">
                        <div class="option">
                            <p>option</p>
                            <input type="checkbox">
                        </div>
                        <div class="option">
                            <p>option 2</p>
                            <input type="checkbox">
                        </div>
                        <div class="option">
                            <p>option 3</p>
                            <input type="checkbox">
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div id="dashboard"></div>
    </div>
    <script>
document.getElementById("editicon").addEventListener("click", unfold);
        document.getElementById("cross").addEventListener("click", unfold);
        var clicked = 0;
        function unfold() {
            if(clicked == 0){
                document.getElementById("sidebar").classList.remove("sidebarshow");
                clicked = 1;
                console.log(clicked);
            }else{
                document.getElementById("sidebar").classList.add("sidebarshow");
                clicked = 0;
                console.log(clicked);
            }
        }
    </script>

</body>
</html>