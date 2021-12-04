<x-apps-layout>
    <section class="coffee-menu">
        <div class="coffee-container">
            <h1 class="heading"><span>Review</span></h1>
            <form action="{{ route('reviews') }}" method="post" enctype="multipart/form">
                @csrf
                <textarea name="subject" id="" cols="30" rows="10" placeholder="silahkan" style="border: 1px solid;margin:auto;">kerenn sekali</textarea>
                <br>
                <button type="submit" class="btn btn-primary">kirim</button>
            </form>
        </div>
        <div class="clearfix"></div>

    </section>
</x-apps-layout>
