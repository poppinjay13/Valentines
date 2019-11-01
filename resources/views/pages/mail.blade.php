@component('mail::message')
# Order Confirmation
Hi,
Your order has been received and your payment has been processed.
You will be contacted when your order is ready for pickup.

Here are your order details:

@component('mail::table')
| -----------------|:----------------------:|<br>
| Flavour&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| {{$order->flavour}}    |<br>
| Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| {{$order->size}}       |<br>
| Icing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| {{$order->icing}}      |<br>
| Addon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| {{$order->addon}}      |<br>
| Inscription&nbsp;&nbsp;&nbsp;| {{$order->inscription}}|<br>
| Pickup date&nbsp;| {{$order->date}}       |<br>
@endcomponent

Thank you for sharing a sweet day with us,<br>
Valentine's Cake House
@endcomponent
