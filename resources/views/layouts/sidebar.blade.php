<input type="checkbox"  id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-unlink"></span>
                <span>E-Store</span>

            </h3>
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{route('home')}}">
                         <span class="ti-home"></span>
                        <span>Home</span></a>
                   
                </li>
                <li>
                    <a href="{{route('categories')}}">
                    <span class="ti-layout-grid2-alt"></span> 
                    <span>Category</span>
                    </a>
                    
                </li>
                <li>
                    <a href="{{route('product.index')}}">
                        <span class="ti-clipboard"></span>
                        <span>Products</span>
                    </a>
                    
                </li>
             
                <li>
                    <a href="{{route('post.index')}}">
                        <span class="ti-book"></span>
                        <span>Post</span>
                    </a>
                    
                </li>
                <li>
                    <a href="{{route('message.index')}}">
                        <span class="ti-comment-alt"></span>
                        <span>Messages</span>
                    </a>
                    
                </li>

                <li>
                    <a href="{{route('post.index')}}">
                        <span class="ti-user"></span>
                        <span>Logout</span>
                    </a>
                    
                </li>
              
                
            </ul>
        </div>
    </div>

    <p>
    
    </p>