@extends('layouts.app')

@section('content')
<section id="contact" class="py-5">
    <div class="container">
        <form id="contact-form" action="{{ route('site.contact.submit', ['locale' => app()->getLocale()]) }}" method="POST">
            @csrf
            <h1>Contactez-nous</h1>
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" class="form-control" 
                name="lastname">
            </div>
            <div class="form-group">
                <label for="">Prénom</label>
                <input type="text" class="form-control"
                name="firstname">
            </div>
            <div class="form-group">
                <label for="">Adresse e-mail</label>
                <input type="text" class="form-control"
                name="email">
            </div>
            <div class="form-group">
                <label for="">Adresse</label>
                <input type="text" class="form-control"
                name="address">
            </div>
            <div class="form-group">
                <label for="">Code postal</label>
                <input type="text" class="form-control"
                name="postalcode">
            </div>
            <div class="form-group">
                <label for="">Ville</label>
                <input type="text" class="form-control"
                name="city">
            </div>
            <div class="form-group">
                <label for="">Pays</label>
                <select name="" id="" class="form-control">
                    <option value="">Pays</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <textarea name="" id="" rows="8" class="form-control"
                data-error-msg="Veuillez taper votre message."></textarea>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">J'ai lu et j'accepte la politique confidentialité.</label>
            </div>
            <input type="submit" value="Envoyer" class="bigbutton bigbutton-blue col-12">
        </form>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script>

if ($("#contact-form").length > 0) {
    $("#contact-form").validate({
        rules: {
            firstname: {
                required: true,
            },
            lastname: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            address: {
                required: true,
            },
            postalcode: {
                required: true,
            },
            city: {
                required: true,
            }
        },
        messages: {
            firstname: {
                required: 'Entrez un prénom',
            },
            lastname: {
                required: 'Entrez un nom'
            },
            email: {
                required: 'Entrez une adresse e-mail',
            },
            address: {
                required: 'Entrez une adresse.',
            },
            postalcode: {
                required: 'Entrez un code postal valide.'
            },
            city: {
                required: 'Entrez une ville'
            }
        }
    })
}

</script>
@endsection
