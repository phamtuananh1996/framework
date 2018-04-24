<div class="sidebar ">
								<div class="group_sidebar">
									<div class="list-group navbar-inner ">
										<div>
											<h3 class="sb-title">Danh mục blog</h3>
										</div>
										<ul class="nav navs sidebar menu" id="menu-blog">
											

                                            
                    @foreach($menuc as $item)
                    <li class="item  first">
												<a href="/groupcategory/{{$item['id']}}">
													<span>{{$item['name']}}</span>
												</a>
											</li>
                    @endforeach
										</ul>
									</div>
								</div>
							</div>