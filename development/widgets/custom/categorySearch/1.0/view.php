<div id="rn_<?= $this->instanceID ?>" class="<?= $this->classList ?>">
<span class="rn_Label" id="rn_<?=$this->instanceID ?>_label">Service               
    <span id="rn_<?=$this->instanceID ?>_RequiredLabel" class="rn_Required">*</span>
    <!-- <span id="rn_ProductCategoryInput_5_ErrorLabel" class="rn_ErrorLabel"></span> -->
    <!-- rn_Hidden -->
</span>
<div id="cat-wrapper" class="cat-wrapper prodCat_Wrapper">
	<!--<select id='categoryselectBox'  class='selectBox' style="width:100%;"><option value="" selected="selected">SELECT A SERVICE</option></select>-->
    <div id='categoryselectBox' class='selectBox' style="width:100%;">Select a Service</div>
    <div class="PanelContainer catPanelContainer" id="CategoryPanelContainer" style="display:none">
        <div class="searchDiv" id="searchDiv">
            <!-- <input type="text" id="enterSearchTerm" name="searchTerm" placeholder="Type Search Term"> -->
        </div>
        <div class="categoryList-c" style="min-height: auto; max-height: 250px; overflow: scroll;overflow-x: hidden;">
            <ul id="categoryList"></ul>
        </div>
    </div>
 </div>
</div>
<script>
// $(document).mouseup(function(e) 
// {
//     var container = $("#CategoryPanelContainer");
//     var container_select = $("#categoryselectBox");
//     // if the target of the click isn't the container nor a descendant of the container
//     if (!container.is(e.target) && container.has(e.target).length === 0)
//     {
//         container.hide();
//     }

//     $('#categoryselectBox').click(function(e){
//         if($("#CategoryPanelContainer")[0].style.display == "none"){
//             $("#CategoryPanelContainer")[0].style.display = 'block'; 
//         }
//         else{
//             $("#CategoryPanelContainer")[0].style.display = 'none'; 
//         }
//     });
// });
</script>