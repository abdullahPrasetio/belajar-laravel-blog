@extends('layouts.main')

@section('content')
    <article class="mb-5">
            <h2>
                {{ $post->title }}
            </h2>
            <p>By: <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            {!! $post->body !!}
        </article>
    <a href="/blog">Back to post</a>
@endsection

{{-- Post::create([
    'title'=>"Buat Project Laravel",
    'slug'=>'buat-project-laravel',
    'category_id'=>1,
    "excerpt"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius repudiandae unde deleniti, quae ea, commodi voluptatem laboriosam officiis assumenda officia rerum exercitationem perferendis minus doloribus? Alias quibusdam vero .",
    "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius repudiandae unde deleniti, quae ea, commodi voluptatem laboriosam officiis assumenda officia rerum exercitationem perferendis minus doloribus? Alias quibusdam vero .</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam possimus explicabo voluptatibus ea nemo reprehenderit rem consequuntur labore repudiandae enim dolor adipisci, maiores, dolores pariatur ipsum. Amet ipsum, deleniti distinctio possimus accusamus repellendus. Ratione architecto odit tempora dolor repellendus esse, iusto sed maiores. Quae, temporibus sapiente! Alias dolor obcaecati voluptatum unde quidem iure eius rerum reprehenderit laudantium tempora commodi tenetur nobis aliquam in veritatis voluptatem doloremque, exercitationem pariatur vel debitis odit. Ab non ea quaerat! Rerum aperiam odio maxime tenetur.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sapiente aliquam iure pariatur ut molestias repellendus quas nam odit dolore officia eum vitae, facilis illum numquam sunt voluptatibus sit animi ea dolores esse eveniet laudantium recusandae. Molestiae enim sapiente hic inventore! Recusandae, quas. At officiis eligendi veritatis illum consequuntur fugiat vel, quos aliquam repudiandae consequatur distinctio. Ipsam, nam! Quam placeat totam sit necessitatibus? Iusto obcaecati voluptates illo nihil laudantium. Eligendi distinctio dignissimos cum numquam sapiente ex aut cumque accusamus necessitatibus, laudantium asperiores architecto accusantium quibusdam repellendus autem ipsam. Repellat, animi consectetur soluta nemo commodi dicta eum tempora ab corporis tempore.</p>"
]) --}}

{{-- 
    Post::create([
    'title'=>"Belajar Mudah Node Js",
    'slug'=>'belajar-mudah-node-js',
    'category_id'=>1,
    "excerpt"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius repudiandae unde deleniti, quae ea, commodi voluptatem laboriosam officiis assumenda officia rerum exercitationem perferendis minus doloribus? Alias quibusdam vero .",
    "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius repudiandae unde deleniti, quae ea, commodi voluptatem laboriosam officiis assumenda officia rerum exercitationem perferendis minus doloribus? Alias quibusdam vero .</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam possimus explicabo voluptatibus ea nemo reprehenderit rem consequuntur labore repudiandae enim dolor adipisci, maiores, dolores pariatur ipsum. Amet ipsum, deleniti distinctio possimus accusamus repellendus. Ratione architecto odit tempora dolor repellendus esse, iusto sed maiores. Quae, temporibus sapiente! Alias dolor obcaecati voluptatum unde quidem iure eius rerum reprehenderit laudantium tempora commodi tenetur nobis aliquam in veritatis voluptatem doloremque, exercitationem pariatur vel debitis odit. Ab non ea quaerat! Rerum aperiam odio maxime tenetur.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sapiente aliquam iure pariatur ut molestias repellendus quas nam odit dolore officia eum vitae, facilis illum numquam sunt voluptatibus sit animi ea dolores esse eveniet laudantium recusandae. Molestiae enim sapiente hic inventore! Recusandae, quas. At officiis eligendi veritatis illum consequuntur fugiat vel, quos aliquam repudiandae consequatur distinctio. Ipsam, nam! Quam placeat totam sit necessitatibus? Iusto obcaecati voluptates illo nihil laudantium. Eligendi distinctio dignissimos cum numquam sapiente ex aut cumque accusamus necessitatibus, laudantium asperiores architecto accusantium quibusdam repellendus autem ipsam. Repellat, animi consectetur soluta nemo commodi dicta eum tempora ab corporis tempore.</p>"
])

Post::create([
    'title'=>"Pindah Kerja Jangan Ragu",
    'slug'=>'pindah-kerja-jangan-ragu',
    'category_id'=>3,
    "excerpt"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
    "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam possimus explicabo voluptatibus ea nemo reprehenderit rem consequuntur labore repudiandae enim dolor adipisci, maiores, dolores pariatur ipsum. Amet ipsum, deleniti distinctio possimus accusamus repellendus. Ratione architecto odit tempora dolor repellendus esse, iusto sed maiores. Quae, temporibus sapiente! Alias dolor obcaecati voluptatum unde quidem iure eius rerum reprehenderit laudantium tempora commodi tenetur nobis aliquam in veritatis voluptatem doloremque, exercitationem pariatur vel debitis odit. Ab non ea quaerat! Rerum aperiam odio maxime tenetur.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sapiente aliquam iure pariatur ut molestias repellendus quas nam odit dolore officia eum vitae, facilis illum numquam sunt voluptatibus sit animi ea dolores esse eveniet laudantium recusandae. Molestiae enim sapiente hic inventore! Recusandae, quas. At officiis eligendi veritatis illum consequuntur fugiat vel, quos aliquam repudiandae consequatur distinctio. Ipsam, nam! Quam placeat totam sit necessitatibus? Iusto obcaecati voluptates illo nihil laudantium. Eligendi distinctio dignissimos cum numquam sapiente ex aut cumque accusamus necessitatibus, laudantium asperiores architecto accusantium quibusdam repellendus autem ipsam. Repellat, animi consectetur soluta nemo commodi dicta eum tempora ab corporis tempore.</p>"
])


    --}}

    {{-- Post::create([
    'title'=>"Belajar Figma Yuk",
    'slug'=>'belajar-figma-yuk',
    'category_id'=>2,
    "excerpt"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.",
    "body" => "<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, odit!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni laborum veniam cum laudantium dolor obcaecati dolorem at quis mollitia odit tempore, quas ex neque molestiae modi fuga, itaque vitae accusamus a sapiente doloremque nisi. Excepturi sequi, pariatur molestias libero distinctio tenetur! Quod quae, officia doloremque rem cumque consequuntur temporibus neque tempora veniam eaque soluta doloribus sunt quasi aut commodi totam.</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi facere fugit commodi est praesentium, dolores illum iure nobis explicabo quidem officiis maxime dicta velit aliquid molestiae. Perspiciatis assumenda totam aliquid aliquam dolorum tempora magni ad enim nemo earum, laboriosam voluptatem suscipit maiores, architecto sit est rem voluptas! Consectetur, rem? Illo nihil fugiat quos earum fugit, nemo magni voluptatum rerum officiis rem deserunt dicta, illum vel? Eaque corporis porro cum? Minus.</p>"
    
]) --}}