
let availableKey=[
    'Html',
    'Css',
    'JS',
    'C++',
    'Java',
    'PHP',
    'where to learn coding online',
    'where to learning design online'
    ];
    listItem=document.querySelector(".list");
    input=document.getElementById("input");
    input.onkeyup=function(){
    let result=[];
    let i=input.value;
    if(i.length){
        result=availableKey.filter(
            (keyword)=>
            {
              return  keyword.toLowerCase().includes(i.toLowerCase());
            }
        );
        console.log(result);
    }
    display(result);
    
    }
    function display(result){
        const content=result.map((list)=>{
            return "<li onclick=selectInput(this)>"+list+"</li>";
        });
        listItem.innerHTML="<ul>"+content.join(' ')+"</ul>";
    }
    function selectInput(list){
        input.value=list.innerHTML;
        listItem.innerHTML='';
    }
    
    function goToPage(index) {
        let data = JSON.parse(localStorage.getItem('product'));
        console.log(data);
        localStorage.setItem('selectedPlant',JSON.stringify(data[index]))
    
        window.location.href = "index2.html";
        
        } 