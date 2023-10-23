{{--@component('components.layout')
    <h1>En esta vista utilizaremos una plantilla generada por nosotros utilizando componentes<h1>
@endcomponent

Se puede utilizar esa forma o la siguiente--}}

<x-layout :sum="2+2" sum2="2+2" > {{--Lo que va despues de la x, es el nombre del archivo blade al cual queremos hacer referencia. Ya que la letra x hace referencia automática a la carpeta "components"--}}
    {{--Si pones unos dos puntos antes de una variable declarada en el componente, esta será tratada como código PHP--}}
    <x-slot name="title">Home (componente)</x-slot> <!--Sirve para darle valor a las variables de tu componente-->
    <h1>En esta vista utilizaremos una plantilla generada por nosotros utilizando componentes<h1>
</x-layout>
