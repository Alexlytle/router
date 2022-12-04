<template>
        <div class="containerTabDirect  row">
                        <div class="tabs"> 
                     
<a @click = 'activetab = 1,prevent($event)'  class="tab tab-1 " v-bind:class="[ activetab === 1 ? 'active' : '' ]" href="" data-tab="1">{{title}} </a>
<a  @click = 'activetab = 2,prevent($event)' v-bind:class="[ activetab === 2 ? 'active' : '' ]" class="tab tab-2" href="" data-tab="2">{{titletwo}}</a>
<a  @click = 'activetab = 3,prevent($event)' v-if = "titlethree!==''"  class="tab tab-3"  v-bind:class="[ activetab === 3 ? 'active' : '' ]" href="" data-tab="3">{{titlethree}}</a>

                      
                          <span class="highlighter"></span>
                          
                        </div>
                      
                        <div class="content">
                      
                          <div  v-if="activetab === 1" class="content__section visible product-content" >
                                <p> {{bodyone}}</p>
                          </div>
                           <div v-if="activetab === 2" class="content__section  product-content" >
                                <p>{{bodytwo}}</p>
                          </div>
                          <div   v-if="activetab === 3 && bodythree !==''" class="content__section">
                              <p> {{bodythree}}</p>
                          </div>
                          
                        </div>
                      </div>
</template>

<script>
export default {
         props:['title','titletwo','titlethree','bodyone','bodytwo','bodythree'],
        data(){
            return{
            activetab:1,
            // title:'hello'
            
            }
        },
        methods:{
            prevent(e){
            e.preventDefault()
            console.log(this.activetab)
        
            }
        },
}
</script>

<style>
/* tabs */

.containerTabDirect {

display: flex;
align-items: flex-start;
}
.containerTabDirect .tabs {
display: block;
position: relative;
z-index: 3;
width: max-content;

}
.containerTabDirect .tabs .tab {
width: 200px;
height: 60px;
text-align: center;
font-weight: bold;
font-size: 16px;
padding: 10px 0;
transition: all 0.25s ease;
border-left:5px solid #1d597d;
}
.containerTabDirect .tabs .tab:hover {
color: #ff454e;
background-color: #112240;
text-decoration: none;

}
.containerTabDirect .tabs .tab.active {
color: #ff454e;

}
.containerTabDirect .tabs .tab.tab-1.active ~ .highlighter {
transform: translateY(0px);
}
.containerTabDirect .tabs .tab.tab-2.active ~ .highlighter {
transform: translateY(60px);
}
.containerTabDirect .tabs .tab.tab-3.active ~ .highlighter {
transform: translateY(120px);
}
.containerTabDirect .tabs .highlighter {
display: block;
background: #ff454e;
width: 5px;
height: 60px;
position: absolute;
top: 0;
left: 12px;
transform: translateY(0);
transition: transform 0.2s ease;
transition-delay: 0.1s;
z-index: 10;
}
.containerTabDirect .tabs a:first-of-type {
border-top-left-radius: 2px;
}
.containerTabDirect .tabs a:last-of-type {
border-top-right-radius: 2px;
}
.containerTabDirect .content {
position: relative;
}
.containerTabDirect .content__section {

top: 0;
left: 0;
opacity: 1;
z-index: 0;
transition: opacity 0s ease;
}
.containerTabDirect .content__section.visible {
position: relative;
opacity: 1;
width: 100%;
height: auto;
transition: opacity 0.5s ease;
z-index: 2;
}
.content__section p{
padding-top: 20px;
}
.tab-product-header{
font-family: 'Calibri';
color: #ccd6f6;
font-size: 35px;
}
.product-content img{
width: 300px;
margin-bottom: 20px;
} 

.tabs .tab {
display: flex;
align-items: center;
justify-content: center;
}
a{
color: black;
}

</style>