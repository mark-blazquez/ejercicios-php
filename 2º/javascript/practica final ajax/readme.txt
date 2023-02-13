este proyecto consiste en hacer llamadas ajax a un documento json o xml para obtener datos ,
formatearlos y utilizar jqueryui para representarlos con los diferentes elementos que este dispone.
Para ello yo he utilizado la api de google que sera la encargada de obtener datos de nuestros videos subidos y 
de nuestras lista de reproduccion , para eso debemos primero de autentificarnos con el boton de iniciar sesion,
que hara las llamadas pertinentes para loguear al usuario con sus cuenta de google
(solo funciona para mi cuenta y para la de cristina@iesiliberis porque la api de google ,
requiere cuando esta de prueba una aplicacion en desarrollo que solo se pueda utilizar un maximo de 100 usuarios,
y estos deben de ser registrados en la pagina correspondiente ).
una vez que el usuario se ha autenticado aparece un elemento jqueryui formado por dos tabs donde si se pulsan uno de los los botones que los compone 
hace una llamada a la funcion que recoge el json de la api y lo imprime en texto plano , es importante este hecho ya que la api es asincrona 
y cada vez que se hace un a llamada con el boton los datos se refrescan con el contenido de youtube y podriamos recuperarlos direntamente imprimiendolos ,
pero como la gracias esta en utilizar ajax es por ello que pido que se copie y se pegue ese texto en un documento.json y que se suba al servidor. 
una vez este documento ya esta en el servidor ya se puede hacer la llamada ajax con los dos ultimos botones ,
el de lista de reproduccion que muestra un acordeon colapsable y el de videos un div que se le aplica un efecto al pulsar sobre un boton.
EJEMPLO DE USO 
1 iniciar sesion en el boton 
2 pulsar sobre elemento a mostarla primera vez 2 veces(boton lista de reproduccion o videos subidos "en este ejemplo utilizaremos lista de reproduccion para ver la asincronia de ajax")
3 copiar lo que sale desde la primera llave hasta la ultima
4 pulsamos en el boton de lista de nuevo para recogerlo
5 vamos al escritorio, clic derecho ,nuevo,documento de texto,le damos el nombre que sea , pero lo imprtante nos aseguramos que su extension sea .json
6 en el div de subidas de archivos pulsamos en seleccionar archivo y subimos el documento creado
(esto lo que hace es mandarlo a un php que sube ese documento al servidor, que aqui es donde ajax llame y obtenga los datos)
(esta pagina se cierra sola le he dado 5 seg para que el documento se suba bien al servidor )
7 volvemos a la pagina y aparece un nuevo div ya en este debemos de pulsar el boton lista de reproduccion aparecera un acordeon con nuestra lista de reproduccion
***para ver el comportamiento asincrono vamos a ir a youtube en cualquier video ponemos el mouse encima aparecen trres puntitos, pulsamos en estos y seleccionamos 
añadir a lista de reproduccion, en lo que sale seleccionamos crear lista y le damos un nombre....
ahora debemos de repetir los mismos pasos desde el punto 2 y veremos como al pulsar el boton final apareceran los mismo resultados de antes mas el nuevo
(de igual forma para los videos, pero para probarlo debemos de subir un nuevo video a youtube y esto es mas latazo que crear un a lista nueva,pero si lo haces veras que funciona
y en ningun momento se actualiza la pagina) 

