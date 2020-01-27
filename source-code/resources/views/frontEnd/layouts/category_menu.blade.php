<div class="left-sidebar">
    {{-- Gets categories from categories table where they're primitive or have no parents --}}
    <?php
        $categories=DB::table('categories')->where([['status',1],['parent_id',0]])->get();
    ?>
    {{-- Categories header --}}
    <h2>Products</h2>
    {{-- Categories container --}}
    <div class="panel-group category-products" id="accordian">
        {{-- Loop through categories and sub categories from the database  --}}
        @foreach($categories as $category)
            <?php
                $sub_categories=DB::table('categories')->select('id','name')->where([['parent_id',$category->id],['status',1]])->get();
            ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        {{-- Main categories --}}
                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear{{$category->id}}">
                            {{-- include a + sign beside the category name to show that it has subcategories --}}
                            @if(count($sub_categories)>0)
                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            @endif
                        </a>
                        <a href="{{route('cats',$category->id)}}">{{$category->name}}</a>
                    </h4>
                </div>
                {{-- Checking categories if it has Sub categories or not --}}
                @if(count($sub_categories)>0)
                    <div id="sportswear{{$category->id}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                {{-- Loop and show sub categories withing a list inside the main category  --}}
                                @foreach($sub_categories as $sub_category)
                                    <li><a href="{{route('cats',$sub_category->id)}}">{{$sub_category->name}} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>