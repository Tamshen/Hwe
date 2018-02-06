<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<title><?php echo $hwebt ?></title>
		<meta name="keywords" content="<?php echo $hwegjz ?>,Hwe.我爱你" />
		<meta name="description" content="<?php echo $hwejs ?>" />
		<link href="<?php echo $hwezb ?>" mce_href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<!--[if lte IE 9]>
		<div class="ie9">	
 			<div class="ck"> 
          		<h2>您的浏览器已经过时！！</h2>
				<p>您的浏览器已经过时！过时浏览器将导致页面显示不全！</p>
				<p>请升级浏览器！以获得更好的体验！</p>
				</br>
				<div>推荐升级浏览器：
			  	<a target="_blank" href="http://www.google.cn/chrome/browser/desktop/">Google Chrome </a>或者  <a  target="_blank" href="http://chrome.360.cn/"> 360 极速 Chrome</a>
          		</div>
		  </div>
		</div>
 		<![endif]-->
		<link rel="stylesheet" href="<?php echo $turl; ?>/style.css" />
	</head>
	<body>
		<div class="main">
		<div class="page">
			<img oncontextmenu="return false" onselectstart="return false" ondragstart="return false" src="data:img/jpg;base64,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" class="yun y1" />
			<img oncontextmenu="return false" onselectstart="return false" ondragstart="return false" src="data:img/jpg;base64,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" class="yun y2" />
			<img oncontextmenu="return false" onselectstart="return false" ondragstart="return false" src="data:img/jpg;base64,iVBORw0KGgoAAAANSUhEUgAAAeMAAAErCAMAAADaEhvTAAADAFBMVEUAAACxomyvoGu/r3KvoGuzpG2/r3LBsXPHtnWfkWXIt3XDs3PFtXTFtXS/r3LEs3TAr3KfkWWYi2LFtHS+rnG/r3LGtXWajWO0pW25qW+un2ucj2S9rXGZi2K3qG+ZjGOajWPFtHSzpG3GtXXIt3W6qnCajGPGtXWajWO3p2/GtXW6qnCWiWHFtHTGtXSwoWyilGaajWO9rnHGtXWbjWPFtXSZi2LHtnWvoGvIt3XHtnW5qXCbjWO5qW+2pm6cjmTHtnWqnGqajGPDsnOZjGPIt3WomWjFtHS+rnGdkGS6qnCXimKsnWq4qG+3p2+2pm6ekGSYi2LFtHSvoGy3p26un2u7q3CvoGu7q3CtnmvBsHO2pm6+rnKklmetnmuajGO8rHHIt3Wun2u3p26dkGSun2vCsXOWiWG8rHGll2eXimKekWWWiWGjlWaekWWtn2ubjmOjlWenmWitnmu1pW7Es3S4qG+5qXDGtXW8rHG/r3KrnGqyo23CsnOxomyfkWXBsHOvoGu2p26ilGa7q3C9rXGsnWqpmmnFtHSnmGjAsHKml2ill2eklWewoWydj2Shk2abjWOcj2SommnDsnOjlWezpG2gkmWajGO+rnLHtnXp4baqm2mekGSWiWHIt3aYi2KXimK0pG2ZjGO2pm65qW++rnGzo22gk2bJuHbo4LTj2q3h2Kzj26/n3rPl3K/f1qrm3rLo37Tl3LHd1KjYzZzYzJjg1qfh2Knb0qbWypTSyJ3OwYzMvoXf1aXYzqLc0aHEtHje06Pa0KDWy5zUyJPMwJDEtXu8rXfCtILHuHzZ0KTPw5KhlGrRw4zFtn+nmm/LvorJu4S4qXTAtYnJun69r3zSx5jJvpK3q4DAsn7OxJnMwpawpHjVy5/OwIfDuIy+soejlmzb0J3Gu5DLvIGzpnvAsXnHt3izpHDPwonFuIO6roO1qX6mmW3Hu4qrn3PUyZi5q3nTxo+sn2+1pnHRxZCqnG7PxJbFuIepnHGuoXfRxpS9sYK0pnawonI3H6+FAAAAc3RSTlMAAgUQDAkZI5ojqol3bjErHRLqpUEV92tmXDo5sa90YEQ6KuTZpYaCV/XOfXZnVkcxGu+zm0f17eDGXU9N7NTGjnUr8ZD60k338cLBiYj74tnQwJyUVPn35sS6uZaUYuHZubGcee7g2s2lovj46reB+fX5pAHurQAAIUNJREFUeNrs3D1r6lAYAOAo7eDYLBkkxEkcMlQQJ0EQl+JSf4FLQZBS+g/yE0LOFHghpGS5eA2ocSkZ/AESyOCg+IFKcNLirMut94P71dYY86H1POAgiKBv3uSc95zzEmconMxFMwzFsvF4PP/6YlmWSmSiueQlgZ24cCTD5ukiKb3rvlyoxBO5MIGdnqsYS5fvJbuKKSZHYKcjyVTK0v7ICpMksON3mUmVJecKbITAjtkVQ99LhypQVwR2nMKZbYDdcF+JEtjxieRJyUVFBg+1j0yMltxWYi8I7FiEEkXJCySO8rFIlCWvkCy+Yx+BWEHyUjlBYMFK0pLXCtcEFpwwm5a8d5/H8+XA5IqSP0h8ww5GiL2XfEPjQnYAkoUnP+FU9l+MfPIZjZ/K/qKe/FfCRWwfhVNPgWAJzCcX9FNAaFzc9MdV9ikwZbwhyA9XxacApfH4+j+fLMSv4gTmrYusHLQKXovyVLggO4Q4Y2auzdmME+UDFfBM2UsVeU/GZmENx88q/EGrd3RrOjcV2aEy3rvpHVa2TzH7VluDXxpqrf7cadXrahV+aj4PpitHWV3Cw2uvxGS71lNdgy21Pez2R6Yh/4GbrZbTnl6HrWZ7skHyvkhc8/JGkpTtQKNeDV7VBt2R8eEHV4thC1419IUh7ycdIzAPFOTdlM1Q28Z32J/JtnBzaxvnantq4CAHjpJ3mk22Gfw8WSnyPoyF3gSo6ktx+w4HOTC5tLzDZlAFqFmm7ADX16sAqjXDQfZUKLI9B04xsUiI+F9W+ZA472xTcSQqThnT1vYbNopdaTzw2ks4ls+mf/97D/8dH2SUDy1bAJo1Uw7z/U7QmSs2pfGWzb0OKyn/yv514uiC/DA2HQC1yymHm1kawPNSsYfExRCbrmnlTSXqd5TjH8VFB9C6SHEH11UBOiPFlhIua9pxlVLeVYwSPyTTyntQtwFNy1Dcw01VgLGp2JHFXWN2i5HKR/I/UjmvvGfVejceznGTBlR7XxQbaALb4U7coZDc5npafBuyqvB1KbrPGAKofdGGOPFLKHmdSVAUxSRisRzO759CFXGnUu79K+GlAzAwRE+sOgBjU9yN2f6Qa6pS/PtCJAsp6hovNRMp0QbyOlQS39TXQJ2LXhEWGjSmgrjLYzSWIsW3pQt30RBxzvKiLSQjvgX1AMYz0UOGDtB+EQ9EpjLnm86MeAijDTARRG/1VdD64sHI/JmWxCJp8QBmHbS56DljDDDgxMMVqXPcm50VDrBRoW4Kfpg2obUWXHCTP7vDj4xwgHkD2obgj1UdGn3BDY+p86p9XpKCc/0m6JzgF0MHsJDghsfUOeUyKzjXr4LOCz7qVkH/IrjiMX42Je5QSXBsWYUBEnw11+B5JriDZM5kxpwRHJs3YYgEn61rUFsJLsmex7ozLTi1acBA8N+sA9pIcAnKn8FEKnyDHDJV0HkUAE6Hxhy55fbzbQYLR6IJKp5P0TSdSsXvGAo5ZNShw6FA8ANo9pFrUp9oZSqSiNO3j8gdXBvqBgpKD6oL5JrbT/FUDkfvHm6Qm3qgmSg4FlRdzORHijhxSYa+QS7rA8xRkCyoLpF7TrofVJLKIvetGzBBwbKgOULuuT3VA5CXiQfeC19aoPNB64G25t1zc5L9RSL5G94bFtQMPnADqL3wLoqfXNUr88B7ZQQw4oPHjaFl8C46raZfoUSR94xRA4s/BkYLxhz/3bbHiLlardamaXC8U9nTWYsKMbe8h3rQ4vij8KLCsNvTO3UV/m0zMpgsRjN+XyfTeuIbO3cPm0QYxgH8rdGhYycTO+hk3NTE0cTUgaSJQxcHhzrp0JhqWkeHGxgIAQwJIQx/2ZvrnV65Wy4Mt5kY0oThEiEcBJqGCZAYErQNRetXFO4L7oND3t8E/2c57rnn5eMld9d5hw/bmsRz53fpGK912UCs1D9UWfwicoIgy7IkCGIOf0Kl1OpOdD2uz8XfvVbvZR3aa1fe4jehXvy3ysjQsoGh1kpq+fTk6J/wsHjabtUrCo9zYl7tZm17Fvyfr1fuZB3aa3AAq6jVTvG0VTl/XGv/XW9h/zA7J46qakUAgH2tvZe159ldEmhLl9ezDrU5QFb/zAVT1URAajF/LgEOrexc6ZQ1DoBYqWZtCHqT7ztepg8rQKE9kjU4QCj/etaAzGTnzolaACA3kllLgW7y0pNnjEMdGWJrPN5rCUChynx3yKPJzKViXQDE0gljLbDvycv3GKdOOEhF3UqmwQOVDsPUoTBzq1lhgXyXsRTQT9dX1xmnOgKUI6PiUSkHsZGe2zH+6aR0ALZSZKxsB/Dv1xfvMI6lC1DSZucnD3AoMPOtU8rhoJ5kLGwEbq/x1gbjXAXCEWOqzAEtZt4VK4BUZSw8D9gGxY11xrky3nYZC0cV/pCZf00J7LHVKAfqLvdL1xkXdHiojLUT5n+QPGYhW72UAO0nrzzPuEGDkswsjqoAvp0xtR6Y/YnljYwbTtlcN7NIEnmw9YypjYBsJ69uZ1xRQymzYOosNPOl6w4JghvPMs6li9UGxE5m0ZRzyKczZoLwo+blPSeS3bZayks8ztX3Fk9ThHK0Z2J79t+SnySnlag2NPktfspxhbwWSy6gKg+5kzSxRWbsenIqiXapwOKcUNPq5dNOcnF1OUjFpIkZr9abySn0VSUHgJU1tbmQozuiKEHom9Q3LhH7gtDijlr40d9Sm7b3t44MwWySnxDbZt/icDufA8R8a5HXZv0mSyanZGeZzMr18GRiKgfk8uVEmBpRlCB3jMtbZEaehCfSOX4HcPVimNLRF6CYXPurZCZuTDbDxyKglNNhSl9vHx+Nq/fILKzuhO1LqzxQOwtTxoYiSsbVa8R/y9th+9oSoDTDlKkyi4FBaSaDfCkUtq2fB6R2mLKiImc8CP4P8lbatoYIsZ5IU9Y08H2j2nPis8tpu/o1oNZLU3YkFBRiRsVbxFf3d9I2lXnwrTRlU5+DZlTbIn66EErbE9OAWj9N2dbMwWgkdlaIjzYT9vRk5NQENYk6xJ5BaY34ZzVhT5kHV01Qk6lBietXQsQ3F0I2r0gWtX6CmlCfR92gtEr8spawI64Bx/EENbEBckP9yibxye2dhA2pGnKDBDWNGgr6w7F9gfhjM25DXwbfjFNT6YlQ9Ss3iS+Wd+0cpQRuGKem1IDY0y34tFhv2WmxAKkXp6am4Ituvr1EfLAcs9FiDnI/Tk2vyrJV3cIVosv3d+O+QFvs1BcouvkD4r2VnZiVvgSpH6Mc6YkY6OUh4r21mJVIAUIvRjlUhxDVy1eI50IxK3nwwxjlVIpDQy9/SLy2GrNyjINmjHKuoT/Im8RrmzELLaAVo1wQFXQHOUS8th01NxRRilKuUCGkxtPdS8Rbt6LmIjKUVJRyRWQfA534CvHWi6i599jvRSmXfEJBJ10j3noUNfUZ+Byl3NI7wNl4ukU8dWk3auaVgC9Ryj1fUBkPQ8RTV1KmShBepSj3nOFtbyzcXSJeWjM/IhblFOWmAurj4TLx0pbFAeVTlKu+QhoPbxIvhVImBjgYpihX9XI4GwsfEw8t7UaMvRFQilAuq+mc1AfEQ7cjJj6AfxmhXDaAMJZtEQ9diZiQ8ClCue3VAc5Gs0fEQw8jxgYQexHKdbXx0QkRDz2OGCvgfYRyn4rCaPSUeGjtjaEzsMM3lPuGYF+PZhfICH96rCH/hvKCjMFo9I39+mdVGwqgAH77+jq4tUNBHP0COmYquHRysyIuDgFnhzumCHfJeL/A6V4w2sani3SwUAmEuhRLUqR0Dx1CQwUd+odSX2vsTZ8m3GpKfts5uYJwuGLuE3mqT6LoIzhPMjJYWO9XOSJPVYvyBYaWkcLBeL8qEwHpG7t4r2Wk+NzDt72qQARkb0xHCLSMHGN8CWW5G3eif0+eaxlJ1ngXynI3rmgRLLzQMpJs8GGvKRF5WlqECWwtI0kAI5Tl3uO6LsZ78PSMJKyHb+FG5sYFXcxBX89IYyIIF0UiT04X8zHTM9JM8TaUpW58oYu9gK9npFnDChd3iUSKLjTGFz0jjY8X4eIekahJha7wlWaksfE6lBskoctCq1KtVvKlnOBhlYqs0KMZeQKYoayQJO5Vdm5qW62USVgr4jv0aUaerxiG8kMS3+1qg+5ROkWyo0xFbExoRh4GsN2skthKChVp1i/ItYsGFdjgA81I9AzebqyRrctioVSq10ulQu4OOUSFRlHyv1Z+SAXewaUZiQbh/7QVcqvYqqoP27tlu1nLl2/FmXhLaW1XrlGBOeY0/Txv5XmcniMTwW5Umw0q1lbrlyRSi/6dUv957P/b+Kv9zn1tjvDTsD/5ZH0MzmtrEw49VKNWJGLFBr2JmvtxjgqsYdF0CvzpAFuj0WCEa1eTte3RcyHcOJpaJiJNdrNG54KQtuCBC4ulD1+6BgAMpmt/GXg/y663cDbWzASA3sQK2FmYwGFHqd0mf6izgzwoE/U/2TiYGwD6rr1gIt7SenkFwLQW7PRMOOw47ZLgGh+m0ckL2nnaNub2awDjG67pY9t9DmBqcyZT4o3FOiSswA6mCDeesxThmz4wWAeHHLVnzwDD8thJGQjY0WrhF6kaS+QNXJYafGMA5oazA3m+CQzXK3ZCBhbsaDw8ssIT8THjabEcA2P7yM9MgaHl8ZMZYsVjeER+K/JkbLzi6bCYAabNj+ZMAcPnJ+Khx2PJk19aPBkHfZ4K/hCDOEttVzaX/CQWGPBYGgVyrcqTWeCKp8DiJeCueFx2H3A9fgIOxjwe5ZJsqd1kHvew6p69zRB9p5vAU+sZjGX339tg1o2pRraa3YRMON0z9525+llpI4rCAH6stu5KFwpJF1kILoILt4KYBxCMi1q6yFK67uYyoTBkMQ8xm28XBGFmMomaYN1UaYZhBgISBhLICxTJIigEFLKotkZtbeZO/nnvb/0xzLnnnHv1y7stzI3HK8Nw1dxLc1HLjWqV/ljLjekU7ZzcgjIOJvCPas3A6YvfWRVcdjqdG/9qhBldez2hHl/DzUmtVUTJm8yXCrC83Msy0Wc67rA35pcJ9bgDJyezjgHnIjcZQRnFl32ZgsJJpdlsOtWSjVuFZis3hE9v/vRYHVMDliqxGuCqE3PhwG6pYlzdNE0ApttVI/tAd1LqmJiBriorvQnjZqIf7DdZjEbNAoruhRrVPN3KqOMqw1clpTs4mPTPNWE3VIH8E8CKXNQW3fqgjqsHV5WTXkFh8v1oouipIvkloBlxlT/PEVFCHdcNzlQp6Q4K3hQ+W4El9nW6cA2UIlYWI6LV/XEFOOzuy8hB0dufgm4Zp/tiNSwUG5GSGSJa1MdWgq9LqImjhj4VQRGuLla3ioNWpOQiEa3p42riWpePC7ulT4kPo6GLxZyI9cWJaEcfl49jXTo3MNr61FyjxHSx2N1TpPPtEtF6flxdG0FeMg0b9fz0dC24ecHYGUpdfixFRHPJ/Ki8ulM2D4qWjU5eLoGJXn6afNjC51op4ZKf0l8R0TIbjX+GB6dMLieosumqwGGiNWy0Gdc8Ea2yUQQV4LBSb10FgefXa0wqPZgBmy7PMDwmWh0Ffp2rRDSzzYbnmbBrAZOTD6PFps2RYJHZMfjbFadbCTa0wMSx+DEeICjAZUNIppZ3thKxxMpupj/u0RZZ/Iz7KHYZR4xuzW6wYVXxXWGyquKMRbW9G1+aoUdvPi4nWTQVSPBClXHDOGI00iK3cSR+hgep48BjkaRW3tJzc7FUxB0ymXB1/osRpzuvh32RT1BnsgqO0GERJHfe0gAzsUgHYsFnonmwGMcq/RYb8hiNQ3nXuIIq49tOzFGI2V3G18MlE85GlpNYuh/czb1htFDek1UbtscNpeKviCOWjnAMhT3hLHDKTfdLXUoPd47VPUlpFmq8zHZ8hvgWkns8Jlp7on3Dz/BAivoS2hB8fNckVYelhCeSiec7PDP7bn5+7lmTNQ4HriaaCS88sPtYZUaLzsORokkpW0Q7PLH8hv7yLr6T2dZ+S25uxWfp0UeNo46qJphiGJxWxOnB4rYWnYW2JqUa54bZWKenlrZS/wSSywv0YEcL9xOmJlgLpfBA+ulMv01qkfXED/B/ZY9wroXILNKj2UTq/6Eluvc6pYU7wFdNrBouwwOb9NR6WovKs3GuScjFD22w9MrMkxXeTQ7MJejeqhauLPwYvvFu1Dj9JZ5Woqqh4CnSyRbQVgZKrtODhYwSZqc/DOExxUFdEeocxWxoYOMVjdrk7DF+ZBXZtGEpA228p773GYVjq5/kjXpNEeoEvfDAL2bs3zWNMIwD+KNGMxTSDAnEIkILDkVKQegU7ByEtEsRKR0CXfIXeLyZOtz9EfKdk8FfV22NDlexVTFD6OFBKeQfuMHJJVOGcsZWaJvX5zXRy2f+Jnfv+7zP816SpL/tPs0znZno3rsid2Hlb5LeoKn1WH6+3z1/KE0N0cv7aYSakAbSa/SPjVye6eIT2vdrXI8aRdz0RrMSB5Osc/w6TBNxacpBN+8jrQRLnojTf2xm8kxuCSU7f1+I8zKARv4GT38P6ieHeZ7p7kTmXIff8j7qoSmfpS+D9D/Bffa4bqN4pefvA3dcBSpX7o2BqPJl9JKuvZTXuJ33zxBVVxp49YhusPWaOyqugLKT992gC6A7khzp9/Rn8rJt0sQb6YWFVt43dhVDeWKfbrS2/+qYxy4DHffYV16Fq2PpS7wM00TyWMEuTexI14/2sV8uahjLE5kgSawnjnm08xrqV+LYN24XMM/P5KHpyIofq9iZTjVZZuRfjV3vDxtpIhchuScJjeesAZQczR9n4yLMc6HJvaGJ55qS5HQjZBkHHc0fFya+yded3qC5NpM5jcX+CHy2NR+cV1HzKiyXDl2vJ60p2aeJbVlmiIbmi1ENHfnCn24RR5Dby5YJNFxtxewWiuOz+bk4TcQ0NdMaR6SHDD81P1hFdBkl5ljPajziqo76zzNthbw74tsFI5gOk2dXUxRnzOoxLG31RA/o69JIboO43mlcbgOTubkqjomKw0omyRM80BTt0vyz0YGjrZxdRn2oySUCxLWZVXh0BzCt1VS50AN6BVY0u02eHU3VOk0kZZkWBtqKiZ9FtOY/NUlsbzQFoyZQGura0tklr4l5YuQJKLfxAV3LyPa7WBfainWBLuehu8S1ndJVOC2vykJfLu+Lo8ANX6/1ua5q2giRrCRjo6mvWqGD6oiRS0eIK6mrGZaBkrXMKhe6KFrsdCpInpiuKB1irN/Cqb5yooGqzchlAsQUzumKvCpXrIK+JG4LJZsfT5AnlNUV7dBEKC0LNWDpqyd6MAesJXBFdWVelc3L5VTZNtFW+c1R8uzoit7TtTfSlAlX94HoosTYg/Q2MQUOdXVfmkCtv4QNcOpoCF3B5kKj+n2AJrakqQFKui8KTXQYsQRxbYhFOG2g2BuIuzUs4lKoOCBPOCtUpHbo2mZOyFyhJ/zhfsI5I6bwjxCxkFEHQMcRd8gCLKEkQZ5doSD7LkLXtg+EVAuO8ImDOqN/YsQVyonFDE7rQMsqiDtioTgUauLk2RdsmWchmorMKfEAnwzhl1M0GSl+I0fFotz+J6A2/io4+CXm2yLPoWDJJqLb9MfjnJDroyd8U6hwRhq/kQMxsbCC1bqjkf2lCEuoSSUmTbkmWDIRmgnvZ+etzIQt/DNEhTEg+Y0cSYlbcLpFoHzbkW2rfm5lYy+CNLElOHJr9Edg94AxVlrCTy3OkX9HbFHjVgbjGlA9HRiL+2riVCWfejDryrjBkaDfQtFDRr4Jy/DTEK35odQascWM2zmymgCa1tGiP9/EtwI/vvcgpPzye97XViCyFY/tceIOzILhJ++umJ+KEtt2zrgtu1EFqo0fxiIaqLj89Nt1mgk82zOYUimDrY1Lw1+n6M8PxYhvy7i9D99bAMqXrqHqC4o2O7y3E6CZJxljGb7APDL85aA9P7QXJr6kcRfs0xpQ7DqGEtfEFTt88JBmAsk9YxkKJXw3fPYBVUbqBfEFYid34oPVBlDpD074umgecbOZEM1EMifL0Uf56MRvFXydH3pACkIHJ3dk0K8AaF5+ZeYdFNknIhammRepk+X4xZzds7YNxHEcPzdtUnDSFtIOhS6llEJLM7RbuxQ8JHPHkDn0DQiK4OBmzV7Mb+8g2RI26AFhCUtBGDQ4NOBZgzEN3krAc5uUKGpI5JPjs/yZ8vDFJ+t/PoN9rOLkR+kcxLOjb6SIjQ+NhTkZ6YAadhlHKzv43eC0/yB7TjcEkR2YjfLZOJkd7VVIEU/3GovDuqEKdI5+yrPKAYxfDT7f1jIjft0QxUKTNcrXxDFH9ZgU8ryxUMHUBtA283ejrKHb4PNhg6TuvWiI0oV63Cif3AHjyD6TYjblBTuOmgAM6+T2JIHGZD472VfxrJj9kuczVDGQV0AMjSfbIgVV5YWLf2u5Y3Ywlfm8LnChbNoK5LnEBix5FbgwebIqKahyIAsw/Ddm02M3/A86lbl8WCepnVkravDlufQN9ORVwAyc8HSvyWoM+XLM+lFyfaAWjmQ+m9kvyvLTiQq48jz6LfhMXgVTNLm6bbIyQ5blOHIAqOGgL2do8GQu2a9YXuSnXUBHV57D0FiVEQdtzhvzghRXqcrC9Kc+ADjuMP0LdEXm8o6knuaXJyqmPfyUi/N0+FQWou8W633et4wXZB5bsiJO0O3pAAwzoee/DhAqXPaekdR+/goGXMVEVyksAnpMEaJvYMQK9BaMgK/cJnPZ2VNEop6lAVD9aKiYiBQume36KL80z7eNC1cpKAgBVxGjrwGwA+7egj7mTA/IfJ5+UASLz3wVgNGGp3DZJamD/EdWO31F8WArxSQG2p4iRtyCfaLB4Hx8OkKH+1KqZE6PDxXhpMRsAehzxXv3yaVK/gY0YZ3fpjaGSgHBCLD7ihjjNnzp4pwwKUfed6Dz77YtMq+1fWUZ4rOQcoX7vEc11f/tmt/wFW5sqkM/UwTxdPQunuWZilYyM0/a0GKF2y6ZW+UNWyWbJLWVGyaw2bnAQMT40IEGhDETZKBiRNmFoQ34w9w6OAJ6AeO3Qe5gt8ZWx0uS2s4NrcvReuAbsnQ+4abHRLEAi6UGbaA3vjWmURv6lBVQq5C72HjLVsZ9kvqWG9q4HNcAOArYDLHbBrQBZYIEPagDlhFYHcDu0hvjyADCPitin9zNgypbEYfkyqvcUkN6jyY6jNzp9ac2AKdLmShDDW3v+qqWDuij5Nr+o8lIBxyPFbNJ7urpIVsJmd16L7/UIaU/xzZguPGNHR1HNgB9NGbiTHQ0b1hemjoAVNsajPsSYzQYTtxQB+AnrKiX5M7WttkqeJi5ovxSBWVXJg6AljmJs4k0nFi+DqATTiQmDrWA3i0LxJGNa5woZoUdVsgC7NRo+d6Q1Hp+aSCgWd6oDQAdze+Zf/VCx8CFpplIVKTYgRrR2wVedGQbOoC2E1rJKZ3HF7IQ69u0dJsk9SS/dDCm/6t7bmggo9PsRUlABRvoMMZUtJdkQXYPacm2SGotvzQR0RsEQ28y+GviDU/pEgQ9IAyoaBxHNa/7VVquTZJ6kF9OYNPyeQY6Z1S8LbJAj7/SMr0hV2q5pdTGmJYsMAFnSMWrrZGF2inzwK6SKzOuw4VDyzUxoLoSXYIqWbAHm7V6WbbJlf389HsLZr1Epz3AGdeXobZOFm79Ia2X4y25cjCjHaswpXpJpEhHJ1rS8m+ICI8/1kuR/eT9/aw4UeGf1kuRaIAf15fj1RoR41E5U97IXMHMeGyg5dWXLw4BY1Jflk9EmJf70vJlnk+lNrOOHcANpOU6NVV0lrjqn/bt4EVRKI4D+LOaFNMMnLyLgiDYRST0JCzRvePe+iME/wT/ht5hzlvsDLOwFkIxG3Tp0K1zhwikq//A6u7StOzMTjX6fO36gbyZ0Pf9fr+nWI8AGRJ7Dmo8eMY7b/MhHE0dhL4F9xA+LR1kBBJk6xZ1yh9K4MByTjAdQbhF9pN/WzxCON45CLEgc6LuIGWAg7LgnMANktYZOgiEwQOEk72D0kcCIFDnHYTo85p1Yv0E4WP2KS/9e+QJO1IToEHaHxxUhOrRpHBOtBtDeO9n2rF32yH6hB1BBMiUGclBpAaeqc6pNnHKw21Wg9JdjSGEs6mDmgZQKrV6DhLHz98N53TTOYRwEmXQstf+Y/Ky0NpBzgaocRSSln1cyGetq3UyML9sN66TojBKSni0CB30eAKgV2ZlL3NCAxyI3ll+BvIYx+ylIlzNh8mymXp56JVALghD97JGg2eUd6Z1MEpiflqF3jstoyRgOI5CLxe9CsgNqUhetrpHneOCa+1+xDwcB5eXszsNJjA2Xqy9nPRvQJ4Igxa8DElVcGB4l1gvZsMk55m/X3pncqeL+f2Pk6Ollxv6BuStyapednQCHCjeZcK9P4GJh3mwWp9W0e4u+joZwtjo6z70clQjAA5E6oOXFfaoaejexcJ9MLuHieFo7kf73WuFOVhvIn8+GsLEaLtaerkSLICLiqULbiaOn++UVfdddit//hn+MnyYzOZb3w+CIIrig/91Ox+PHuEvo6dgE7p5k+sAJ02t52ZBaoCDhuy+W7hbBdtZHObLhg/jJ381zT/eBFUBuGkwqps+8+boCpKblnA93ayiuH59f7uND8EiWm12SzdNbdp9B9kAWGpo6Tdtnvitkq+HxAGSEtzLCEr+++lX3XQpyU0VBZ5VVfdaqFUQa9jtixZ2A+CN4Fi67aaHOV5CtHsd+hXwU0VTz61hngPXgKizemo5W8dfrLjXwC6BZ1xNOmOK27jX8G/Ilt1LI2jhFhxptV3c/XFfS4i2fNKJegvjOfwqssvw6mWxdCSTthlLJEvgGIn7UJY58ALyrc7W5q0yuGJN0WIoXZU6g7e0ZVOnFNYyuCoBXlaqdQYY08uv71Q0ymwP/tRRebaOx2PLFDRJsdvSGKVmUzGajg92raYwjNYyRK5x4kIW5QGuBI14c7232Bqv903V7PdpStG6XAkU/lBShAGW1OvYE18HUh/gp8MUFZkqQx1gxiyKOG2EJQ0w0tb+mV0TTkpse4ALqgkKmaiweNRyv2jTGSpp8l3ezFtQyBTRMu/yJLeKQYxAnRLucqIWCaNSZnJp2T1MX9f4RxEG3blDqsOLoIBYmUU4mSWlCgp5IBUkPbujd4sxnKN6LeuYTbZ44JG7eobVbDIkKGCBY8z0t2CdvlYMYaw0Lbr9KT2y3cXvrwsFADiNltLIl7KKAsYZ2bJN4eJ4233FuOqX6f4bBNdSaLlzVrodlWeMonyvTInrsjZtSn/PWpBNXtGMRnEHfNXK3G3LYhmbouhYP/7wFFVjWKsrkpi/xv4dCtxRF9xU/AAAAAAASUVORK5CYII=" class="yun y3" />
			<div class="content"><div class="decoration1 left1"></div><div class="decoration1 right1"></div><div class="decoration2 left2"></div><div class="decoration2 right2"></div>
			<div class="jiexi"">
				<div class="logo" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
				<?php if (empty($tdata["logo"])) {}else{ ?><a href="<?php echo $siteurl;?>" title="<?php echo $ttitle ?>"><img src="<?php echo $tdata["logo"];?>"></a><?php }?>
				</div>
				<div class="gonggao"><marquee scrollamount="3" id="tgd"><?php echo $tdata["gonggao"];?></marquee></div>
				<div class="video">
                <iframe id="video" allowfullscreen="ture" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" src="<?php echo $tdata["vmrdz"];?>" height="100%" width="100%"></iframe>
				</div>
				<div class="foot" id="foot">
					<div class="jiekou" id="jiekou" style="display: none;">
					<ul>
					<?php $jiekou = $tdata["jiekou"];$bfdz = explode("\r\n", $jiekou);foreach( $bfdz as $val ) {$Data = explode('$', $val );echo"<li><a title=\"更换当前接口为：".$Data["0"]. "\" href=\"javascript:void(0)\" onclick=\"play('".$Data["1"]. "')\">" .$Data["0"]. "</a></li> ";}?>
					</ul>
					</div>
				</div>
			<div class="jxan">
				<input id="dizhi" name="text" type="text" placeholder="在这输入解析地址..." value="<?php echo$tdata["tjdz"];?>" onfocus="if(value=='<?php echo$tdata["tjdz"];?>')  {value=''}" onblur="if (value=='') {value='<?php echo$tdata["tjdz"];?>'}"  >
				<?php
					$jiekou = $tdata["jiekou"];
					$bfdz = explode("\r\n", $jiekou);
					$bfdzd1 = explode('$', $bfdz["0"] );
   					echo"<button onclick=\"play('".$bfdzd1["1"]. "')\" id='jiexi'>点我解析</button> ";
					?>
			</div>
			<?php if (empty($tdata["xtj"])) {}else{ ?>
			<div class="k">
				<div class="t"><h3>推荐视频</h3></div>
				<div class="t2 t3">
					<ul>
						<?php $tjsp = $tdata["tuijian"];$splj = explode("\r\n", $tjsp);foreach( $splj as $spmz ) {$Data = explode('$', $spmz );echo"<li><a title='".$Data["0"]."' href=\"javascript:void(0)\" onclick=\"tjsp('".$Data["1"]. "')\">" .$Data["0"]. "</a> </li> ";}?>
					</ul>
				</div>
			</div>
			<?php }?>
			<?php if (empty($tdata["dsqrcode"])) {}else{ ?>
			<div class="k">
				<div class="t"><h3>打赏</h3></div>
				<div class="t2 t3">
					<center oncontextmenu="return false;" onselectstart="return false"; ondragstart="return false">
						<img src="<?php echo $tdata["dsqrcode"];?>"/ width="100%">
					</center>
					<div id="gsyjapi"></div>
				</div>
			</div>
			<?php }?>
			<?php if (empty($tdata["pinglun"])) {}else{?>
				<div class="k">
				<div class="t"><h3>评论</h3></div>
					<div class="t2">
						<?php echo$tdata["pinglun"];?>
					</div>
			</div>
			<?php }?>
			<?php if (empty($tdata["xhz"])) {}else{ ?>
			<div class="k" id="xhz">
				<div class="t"><h3>合作伙伴</h3></div>
					<div class="t2">
						<div class="item">
							<a href="http://www.iqiyi.com/" target="_blank" class="iqiyi"><span></span></a>
							<a href="http://www.le.com/" target="_blank" class="letv"><span></span></a>
							<a href="http://www.hunantv.com/" target="_blank" class="hunantv"><span></span></a>
							<a href="http://www.cntv.cn/" target="_blank" class="cntv"><span></span></a>
							<a href="http://www.pptv.com/" target="_blank" class="pptv"><span></span></a>
							<a href="http://www.kankan.com/" target="_blank" class="kankan"><span></span></a>
							<a href="http://www.56.com/" target="_blank" class="v56"><span></span></a>
							<a href="http://www.ku6.com/" target="_blank" class="ku6"><span></span></a>
							<a href="http://www.1905.com/" target="_blank" class="m1905"><span></span></a>
							<a href="http://www.cztv.com/" target="_blank" class="sina"><span></span></a>
						</div>
					</div>
			</div>
			<?php }?>
			<?php if (empty($tdata["xyl"])) {}else{ ?>
			<div class="k">
				<div class="t"><h3>友情链接</h3></div>
				<div class="t2 t3">
					<ul>
						<?php $link = $tdata["links"];$ljfg = explode("\r\n", $link);foreach( $ljfg as $ljsc ) {$Data = explode('$', $ljsc );echo '<li><a href="'.$Data["1"].'" title="'.$Data["0"].'" target="_blank">'.$Data["0"].'</a></li>';}?>
					</ul>
				</div>
			</div>
			<?php }?>
			</div>
			<footer>
              <p>© <?php echo date("Y")?> <?php echo $hwebt ?> All Rights Reserved. <?php if (empty($tdata["yxsj"])) {}else{ ?></a><?php $Data = explode('$', $tdata["yxsj"] ); echo $Data["0"]; ?><a id="days">0</a>天</a><?php }?>
      		  </p></footer>
			</div>
		</div>
		<div id="top" onclick="goToWhere(0)" title="去上面啊？汪~"></div>
		</div>
		<!--PC-->


<script>
<?php if (empty($tdata["chl"])) {}else{ ?>
var OriginTitile = document.title;
var titleTime;
document.addEventListener('visibilitychange',
function() {
    if (document.hidden) {
        document.title = '(つェ⊂)我藏好了哦~ ' + OriginTitile;
        clearTimeout(titleTime);
    } else {
        document.title = '(*´∇｀*) 被你发现啦~ ' + OriginTitile;
        titleTime = setTimeout(function() {
            document.title = OriginTitile;
        },
        2000);
    }
});
<?php }?>
function play(str) {
    if (document.getElementById("dizhi").value == "") {
        alert('请输入解析地址!');
        return false;
    }
    var value = document.getElementById("dizhi").value;
    document.getElementById("video").src = (str) + (value);
    document.getElementById("jiekou").style = "display: block";
    document.getElementById("foot").style = "height:auto";
    return false;
};
function tjsp(str) {
    document.getElementById("video").src = (str);
    document.getElementById("jiekou").style = "display: none";
    return false;
};
var goToWhere = function(where) {
    var me = this;
    me.site = [];
    me.sleep = me.sleep ? me.sleep: 16;
    me.fx = me.fx ? me.fx: 6;
    clearInterval(me.interval);
    var dh = document.documentElement.scrollHeight || document.body.scrollHeight;
    var height = !!where ? dh: 0;
    me.interval = setInterval(function() {
        var top = document.documentElement.scrollTop || document.body.scrollTop;
        var speed = (height - top) / me.fx;
        if (speed === me.site[0]) {
            window.scrollTo(0, height);
            clearInterval(me.interval);
        }
        window.scrollBy(0, speed);
        me.site.unshift(speed);
    },
    me.sleep);
};
window.onscroll = function() {
    if (document.documentElement.scrollTop + document.body.scrollTop > 100) {
        document.getElementById("top").style.display = "block";
    } else {
        document.getElementById("top").style.display = "none";
    }
}
<?php if (empty($tdata["yxsj"])) {}else{ ?>
var s1 = '<?php $Data = explode('$', $tdata["yxsj"] );echo $Data["1"];  ?>';
s1 = new Date(s1.replace(/-/g, "/"));
s2 = new Date();
var days = s2.getTime() - s1.getTime();
var number_of_days = parseInt(days / (1000 * 60 * 60 * 24));
document.getElementById('days').innerHTML = number_of_days;
<?php }?>
</script>
<?php echo$tdata["tongji"];?>
	</body>
</html>


