<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserHelpController extends Controller
{

    public function index()
    {
        $data['title'] = '用户帮助';
        return view('help.index' , $data);
    }

    public function show(Request $request)
    {
        $data['title'] = '用户帮助';

        $data['content'] =  $this->article($request->input('id'));

        return view('help.show' , $data);


    }

    private function article($id = '')
    {


        $article = [
            '<div class="card-content"><div class="card-content-inner"> <p><span style="color:#666666;">【提示】：早上7点、中午12点、晚上20点10点 为微信最佳转发时间，建议每天这三个时间段分享文章！<br /></span> </p><p><span style="color:#666666;">一句话：点击“个人中心”，点击打开获得的文章，然后分享到您的朋友圈就可以了。有朋友阅读你的文章就会自动计费，每次有效阅读奖励0.08元。（小提示：如果您分享的文章被您的朋友分享了，他的好友里所产生的点击，也算进你的收入里。）</span> </p> </div></div>',
            '<div class="card-content"><div class="card-content-inner"><p><span style="color:#666666;">您或许不知道：您的微信朋友圈是有价值的，都是可以换得收益的，只是无人帮您开发，所以您无法从中获得收益。&nbsp;</span></p><p><span style="color:#666666;line-height:1.5;">乐分赚的出现，恰好解决了这个问题！您只需要将我们的网文分享到您的朋友圈里，就可以和我们分成广告收益了。&nbsp;</span></p><p><span style="color:#666666;line-height:1.5;">也就是说：我们想付费在您的朋友圈，您同意吗？</span></p><p><span style="color:#666666;line-height:1.5;">&nbsp;这一切只须两步：</span></p><p><span style="color:#666666;line-height:1.5;">&nbsp;1、注册成为我们的会员；</span></p><p><span style="color:#666666;line-height:1.5;">&nbsp;2、在首页点“个人中心”，再点击“转发赚钱”把获取的文章分享到朋友圈等社交网络即可。</span></p><p><span style="color:#666666;line-height:1.5;">&nbsp;然后，你就等着收益蹭蹭往上涨，躺着也赚钱的哦。</span></p></div></div>',
            '<div class="card-content"><div class="card-content-inner"> <span style="color:#666666;">1、点击底部收藏我们，然后长按图中二维码，点击识别图中二维码进行关注，关注后按方法一进入。</span><br /><br /><span style="color:#666666;"> 2、将个人中心页面收藏到微信收藏夹，以后可以直接从微信收藏夹进入。</span><br /> </div></div>',
            '<div class="card-content"><div class="card-content-inner"> <span style="color:#666666;">很多转客说：我只有100个好友，反正赚不到多少钱，我就不参与了。 其实不是这样的！推广在于日积月累，在于您是否用心。即使只有100个好友，每天业绩超过500元也不是没有可能。所以，您要认真看一下下述的方法：</span><br /><br /><span style="color:#666666;"> 1、用心选择分享的内容。每个人都有不同的圈子，每个人的圈子都有不同的爱好内容，所以您一定要认真从分享赚上查到适合您的圈子的内容去分享。只有您分享的内容是您的朋友喜欢的，他们才有可能转发。转发？对，转是个特值得高兴的事，因为倍增的速度太快了，从100到1万，也许就是几分钟的事，所以，您分享一个链接前，一定要想一下这个链接能不能让朋友们转发！</span><br /><br /><span style="color:#666666;"> 2、通过摇一摇和附近的人每天多加些好友，并且保持每天分享5-12篇文章，这样收益一天比一天增多。</span><br /><br /><span style="color:#666666;">3、点击【我要收徒】将此页面，分享到朋友圈、微信群、</span><span style="color:#666666;line-height:1.5;">您的朋友、QQ空间、微博等社交平台，通过页面注册的会员即可成为您的徒弟，享受永久20%提成喔。</span><br /><br /><span style="color:#666666;"> 按照这样的方法尝试一下吧，您将会发现：刚开始您每天的业绩只有您好友的三分之一，一周后业绩增长到和好友数目一样多，再过一周即可达到好友数量的两倍，再过一段时间，您会突然发现您的业绩已经成了好友数量的N倍。原因是什么呢？就是因为您坚持每天在做，总有一些链接被人一次又一次的转载，而不管转载多少次，我们的系统都会计入您自己的业绩。这是个几何倍增的效果，每天做到500元绝对不是梦，这需要您用心去做！</span><br /> </div>    </div>',
            '<div class="card-content"><div class="card-content-inner"> <span style="color:#666666;">乐分赚拥有大量长期合作广告主，收入稳定，可靠性高，请各位转客放心参与。</span> </div>   </div>',
            '<div class="card-content"><div class="card-content-inner"> <span style="color:#666666;">手机注册或微信登陆自动注册就可以加入我们，注册后别忘记关注我们并添加到微信收藏哦。</span> </div></div>',
            '<div class="card-content"><div class="card-content-inner"> <span style="color:#666666;">1、奖金以按文章的阅读量来计算的，每一次有效阅读都将获得0.08元，有效阅读是指浏览者正常的访问并有详细地查看乐分赚的文章页，闪退、重复阅读或者阅读次数过多（有作弊嫌疑）不算有效阅读。</span><br /><br /><span style="color:#666666;"> 2、当账户余额大于10元,可以申请提现,24小时内支付到您的支付宝账号！</span><br /> </div></div>',
            '<div class="card-content"><div class="card-content-inner"> <span style="color:#666666;">答：最近少部分用户反映点击无收益，具体原因可能有以下几点:</span><br /><p><span style="color:#666666;line-height:1.5;">1.你转发的内容过多。您的好友把您屏蔽了（建议：适当控制自己每天的转发量）</span> </p><p><span style="color:#666666;line-height:1.5;">2.您转发的内容，可能不是您好友喜欢的内容。（建议：精挑细选内容，多转发些您好友喜欢的内容）</span> </p><p><span style="color:#666666;line-height:1.5;">3.分享赚的收益仅限于手机端，电脑点击访问是没有收益的</span> </p><span style="color:#666666;"> 4.有很多用户会互相点击然后去看收益数涨不涨，官方是明令“禁止互点”的，请通过正常的分享行为获取正当收益，而且系统也会记录每次点击的IP地址，如果多次互点会触发封号机制</span><br /> </div></div>',
            '<div class="card-content"><div class="card-content-inner"> <span>赚钱第一步：点击下面“转发赚钱”，然后挑选文章分享到您的朋友圈，有人阅读就会有收益。第二步，把“我要收徒”页面分享到朋友圈或微信群，有人通过您的邀请页面注册就会成为您的徒弟，您可获得五级共计20%的永久提成。</span> </div></div>',
            '<div class="card-content"><div class="card-content-inner"> <span style="color:#666666;">帐户连续100天没有登录，帐户将被注销。</span> </div></div>'

        ];

        return $article[($id-1)];
    }


}
