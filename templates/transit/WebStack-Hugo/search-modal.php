    <div class="modal fade search-modal" id="search-modal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="search" class="s-search mx-auto my-4">
                        <div id="search-list" class="hide-type-list">
                            <div class="s-type">
                                <span></span>
                                <div class="s-type-list">
                                    <label for="m_type-baidu" data-id="group-a">常用</label>
                                    <label for="m_type-baidu1" data-id="group-b">搜索</label>
                                    <label for="m_type-br" data-id="group-c">工具</label>
                                    <label for="m_type-zhihu" data-id="group-d">社区</label>
                                    <label for="m_type-taobao1" data-id="group-e">生活</label>
                                    <label for="m_type-zhaopin" data-id="group-f">求职</label>
                                </div>
                            </div>
                            <div class="search-group group-a"><span class="type-text text-muted">常用</span>
                                <ul class="search-type">
                                    <li>
                                        <input checked="checked" hidden="" type="radio" name="type2" id="m_type-baidu" value="https://www.baidu.com/s?wd=" data-placeholder="百度一下，你就知道">
                                        <label for="m_type-baidu"><span class="text-muted">百度</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-bing" value="https://cn.bing.com/search?q=" data-placeholder="微软必应搜索">
                                        <label for="m_type-bing"><span class="text-muted">必应</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-google" value="https://www.google.com/search?q=" data-placeholder="谷歌搜索">
                                        <label for="m_type-google"><span class="text-muted">谷歌</span></label></li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-anaconda" value="https://anaconda.org/search?q=" data-placeholder="Anaconda 软件搜索">
                                        <label for="m_type-anaconda"><span class="text-muted">软件</span></label></li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-pubmed" value="https://pubmed.ncbi.nlm.nih.gov/?term=" data-placeholder="PubMed 搜索/文章标题/关键字">
                                        <label for="m_type-pubmed"><span class="text-muted">文献</span></label></li>
                                </ul>
                            </div>
                            <div class="search-group group-b"><span class="type-text text-muted">搜索</span>
                                    <ul class="search-type">
                                        <li>
                                            <input hidden="" type="radio" name="type2" id="m_type-baidu1" value="https://www.baidu.com/s?wd=" data-placeholder="百度一下，你就知道">
                                            <labelfor="m_type-baidu1"><span class="text-muted">百度</span></label>
                                        </li>
                                        <li>
                                            <input hidden="" type="radio" name="type2" id="m_type-google1" value="https://www.google.com/search?q=" data-placeholder="谷歌搜索">
                                            <label for="m_type-google1"><span class="text-muted">谷歌</span></label>
                                        </li>
                                        <li>
                                            <input hidden="" type="radio" name="type2" id="m_type-360" value="https://www.so.com/s?q=" data-placeholder="360 好搜">
                                            <label for="m_type-360"><span class="text-muted">360</span></label>
                                        </li>
                                        <li>
                                            <input hidden="" type="radio" name="type2" id="m_type-sogo" value="https://www.sogou.com/web?query=" data-placeholder="搜狗搜索">
                                            <label for="m_type-sogo"><span class="text-muted">搜狗</span></label>
                                        </li>
                                        <li>
                                            <input hidden="" type="radio" name="type2" id="m_type-bing1" value="https://cn.bing.com/search?q=" data-placeholder="微软必应搜索">
                                            <label for="m_type-bing1"><span class="text-muted">必应</span></label>
                                        </li>
                                        <li>
                                            <input hidden="" type="radio" name="type2" id="m_type-sm" value="https://yz.m.sm.cn/s?q=" data-placeholder="UC 移动端搜索">
                                            <label for="m_type-sm"><span class="text-muted">神马</span></label>
                                        </li>
                                    </ul>
                            </div>
                            <div class="search-group group-c"><span class="type-text text-muted">工具</span>
                                <ul class="search-type">
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-br" value="https://rank.chinaz.com/all/" data-placeholder="请输入网址(不带 https://)">
                                        <label for="m_type-br"><span class="text-muted">权重查询</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-links" value="https://link.chinaz.com/" data-placeholder="请输入网址(不带 https://)">
                                        <label for="m_type-links"><span class="text-muted">友链检测</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-icp" value="https://icp.aizhan.com/" data-placeholder="请输入网址(不带 https://)">
                                        <label for="m_type-icp"><span class="text-muted">备案查询</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-ping" value="https://ping.chinaz.com/" data-placeholder="请输入网址(不带 https://)">
                                        <label for="m_type-ping"><span class="text-muted">PING 检测</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-404" value="https://tool.chinaz.com/Links/?DAddress=" data-placeholder="请输入网址(不带 https://)">
                                        <label for="m_type-404"><span class="text-muted">死链检测</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-ciku" value="https://www.ciku5.com/s?wd=" data-placeholder="请输入关键词">
                                        <label for="m_type-ciku"><span class="text-muted">关键词挖掘</span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-group group-d"><span class="type-text text-muted">社区</span>
                                <ul class="search-type">
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-zhihu" value="https://www.zhihu.com/search?type=content&q=" data-placeholder="知乎">
                                        <label for="m_type-zhihu"><span class="text-muted">知乎</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-wechat" value="https://weixin.sogou.com/weixin?type=2&query=" data-placeholder="微信">
                                        <label for="m_type-wechat"><span class="text-muted">微信</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-weibo" value="https://s.weibo.com/weibo/" data-placeholder="微博">
                                        <label for="m_type-weibo"><span class="text-muted">微博</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-douban" value="https://www.douban.com/search?q=" data-placeholder="豆瓣">
                                        <label for="m_type-douban"><span class="text-muted">豆瓣</span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-group group-e"><span class="type-text text-muted">生活</span>
                                <ul class="search-type">
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-taobao1" value="https://s.taobao.com/search?q=" data-placeholder="淘宝">
                                        <label for="m_type-taobao1"><span class="text-muted">淘宝</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-jd" value="https://search.jd.com/Search?keyword=" data-placeholder="京东">
                                        <label for="m_type-jd"><span class="text-muted">京东</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-xiachufang" value="https://www.xiachufang.com/search/?keyword=" data-placeholder="下厨房">
                                        <label for="m_type-xiachufang"><span class="text-muted">下厨房</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-xiangha" value="https://www.xiangha.com/so/?q=caipu&s=" data-placeholder="香哈菜谱">
                                        <label for="m_type-xiangha"><span class="text-muted">香哈菜谱</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-12306" value="https://www.12306.cn/?" data-placeholder="12306">
                                        <label for="m_type-12306"><span class="text-muted">12306</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-qunar" value="https://www.qunar.com/?" data-placeholder="去哪儿">
                                        <label for="m_type-qunar"><span class="text-muted">去哪儿</span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-group group-f"><span class="type-text text-muted">求职</span>
                                <ul class="search-type">
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-zhaopin" value="https://sou.zhaopin.com/jobs/searchresult.ashx?kw=" data-placeholder="智联招聘">
                                        <label for="m_type-zhaopin"><span class="text-muted">智联招聘</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-51job" value="https://search.51job.com/?" data-placeholder="前程无忧">
                                        <label for="m_type-51job"><span class="text-muted">前程无忧</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-lagou" value="https://www.lagou.com/jobs/list_" data-placeholder="拉钩网">
                                        <label for="m_type-lagou"><span class="text-muted">拉钩网</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type2" id="m_type-liepin" value="https://www.liepin.com/zhaopin/?key=" data-placeholder="猎聘网">
                                        <label for="m_type-liepin"><span class="text-muted">猎聘网</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <form action="https://www.baidu.com?s=" method="get" target="_blank" class="super-search-fm">
                            <input type="text" id="m_search-text" class="form-control smart-tips search-key" zhannei="" autocomplete="off" placeholder="输入关键字搜索" style="outline:0">
                            <button type="submit"><i class="iconfont icon-search"></i></button>
                        </form>
                        <div class="card search-smart-tips" style="display: none">
                            <ul></ul>
                        </div>
                    </div>
                </div>
                <div style="position: absolute;bottom: -40px;width: 100%;text-align: center;">
                    <a href="javascript:" data-dismiss="modal"><i class="iconfont icon-close-circle icon-2x" style="color: #fff;"></i></a>
                </div>
            </div>
        </div>
    </div>