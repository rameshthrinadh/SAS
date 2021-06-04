var tests =[
    {
        "subject":"Maths",
        "no":1,
        "type":"MCQ's",
        "link":"tests/mathtest.html"
    },
    {
        "subject":"Physics",
        "no":1,
        "type":"MCQ's",
        "link":"tests/mathtest.html"
    },
    {
        "subject":"Chemistry",
        "no":1,
        "type":"MCQ's",
        "link":"tests/mathtest.html"
    },
    {
        "subject":"Telugu",
        "no":1,
        "type":"MCQ's",
        "link":"tests/mathtest.html"
    },
    {
        "subject":"English",
        "no":1,
        "type":"MCQ's",
        "link":"tests/mathtest.html"
    },
    {
        "subject":"IT",
        "no":1,
        "type":"MCQ's",
        "link":"tests/mathtest.html"
    }
]

   


    for(let i=0;i<tests.length;i++){
    
        var div=document.createElement("div");
        var sub = document.createElement("div");
        var asno = document.createElement("div");
        sub.setAttribute("class","subject p-1 ");
        asno.setAttribute("class","assno p-1");
        div.setAttribute("class","card  p-3 bg-dark")
        var butto=document.createElement("a");
        butto.setAttribute("href",tests[i].link);
        butto.setAttribute("class"," taketest btn btn-outline-primary p-2");
        var take=document.createTextNode("Take test");
        butto.appendChild(take);
        

        let subject=document.createTextNode(tests[i].subject);
       
        let assnum=document.createTextNode("Assignment No:-"+tests[i].no);

        sub.appendChild(subject);
        asno.appendChild(assnum);

        div.appendChild(sub);
        div.appendChild(asno);
        div.appendChild(butto);

        var ass=document.getElementById("assigned");
        ass.appendChild(div);
        
    }
