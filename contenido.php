<?php 

  function contenido (){
    $datos = array();

    //separacion y contenido
    $datos[0]= "img/bob.jpg"."||" //imagen
              ."Bob esponja"."||". //nombre
              "Bob es la esponja más optimista del océano, 
              la más ordenada, la más formal. Aunque los 
              habitantes de Fondo Bikini se empeñen en complicarle 
              la existencia. Nada que no se pueda resolver con su 
              dosis de sentido del humor y una buena hamburguesa del 
              Krustáceo Krujiente, donde Bob trabaja como cocinero… 
              ¿cómo demonios encenderá el horno bajo el agua? "; //descripcion

    $datos[1]= "img/patricio.jpg"."||" //imagen
              ."Patricio estrella"."||". //nombre
              "Patricio, vecino de Bob y su mejor amigo, 
              tiene todas las papeletas para convertirse 
              en el gafe oficial del vecindario. Unos nacen con
              estrella y otros van estrellados. Patricio, 
              que es una estrella de mar, lo sabe muy bien.
              Sus grandes aficiones son dormir, comer helados, 
              echarse a la siesta y cazar medusas."; //descripcion

    $datos[2]= "img/calamard9.jpg"."||" //imagen
              ."Calamardo"."||". //nombre
              "Sabemos de buena tinta que Calamardo es el más 
              cascarrabias del fondo del mar, siempre está enfadado, 
              siempre quiere ser el mejor, todo le molesta... 
              ¡especialmente Bob! Tanta sonrisa, esos pantaloncitos…
               Ni siquiera las refrescantes aguas oceánicas le enfrían 
               los ánimos. Deberían trabajar codo con codo en el Krustáceo 
               Krujiente pero Calamardo no soporta pasar ¡24 horas con Bob!
                Deberá armarse de paciencia."; //descripcion

    $datos[3]= "img/doncangrejo.webp"."||" //imagen
              ."Cangrejo"."||". //nombre
              "El señor Cangrejo es el jefe de Bob Esponja en el 
              Krustáceo Krujiente. Nadie sabe hacer negocios como 
              él, le encanta el dinero y guarda todos sus ahorros. 
              Se aprovecha de la buena voluntad del pobre Bob, que 
              está dispuesto a trabajar muchas horas por poco dinero. 
              Tiene que competir con Plancton que estará dispuesto a 
              todo por hundirle el negocio al señor Cangrejo, sobre 
              todo para apropiarse de la receta de sus exitosas cangreburguers."; //descripcion
    
    $datos[4]= "img/arenita.jpg"."||" //imagen
               ."Arenita Mejilla"."||". //nombre
                "Arenita es una ardilla que ha vencido el más
                grande de los retos: vivir en las profundidades
                del mar con la sola ayuda de un casco de oxígeno. 
                Con su imparable afán aventurero, Arenita se ha 
                convertido en la amiga inseparable de Bob Esponja. 
                Practica el surf y además ¡es karateka!"; //descripcion

    return $datos;
  }

?>