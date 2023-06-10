<header>

    <div>
        <ul class="d-flex">
            <li v-for="(elem, index) in menuLinks" :key="index" :class="elem.active ? 'selected' : ''">
                <a href="elem.url">{{ elem.name }}</a>
            </li>
        </ul>
    </div>

</header>