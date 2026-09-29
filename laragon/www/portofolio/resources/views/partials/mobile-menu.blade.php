<div class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden"
     :class="{ 'opacity-100 pointer-events-auto': mobileMenu }">
    <div class="absolute right-0 min-h-screen w-2/3 bg-primary py-4 px-8 shadow md:w-1/3">
        <button class="absolute top-0 right-0 mt-4 mr-4" @click="mobileMenu = false">
            <img src="{{ asset('assets/img/icon-close.svg') }}" class="h-10 w-auto" alt="" />
        </button>
        <ul class="mt-8 flex flex-col">
            @foreach([
                'about' => 'About',
                'services' => 'Services',
                'portfolio' => 'Portfolio',
                'clients' => 'Clients',
                'work' => 'Work',
                'statistics' => 'Statistics',
                'blog' => 'Blog',
                'contact' => 'Contact',
            ] as $id => $label)
                 <li class="group pl-6">
                    <a href="{{ route('blog.index') }}"
                    class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">
                    Blog
                    </a>
                    <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                </li>
            @endforeach
        </ul>
    </div>
</div>