<?php
	$this->pageTitle = "Как пользоваться сайтом";
?>
<style type="text/css" xmlns="http://www.w3.org/1999/html">
    span.note {border-bottom: 1px dotted #aaa;}
	.moredetails {border-bottom:1px dashed #aaa;}
	.explanation { display:none; position:absolute; width:200px; padding:20px; background:#eee; border:1px solid #ccc;}
	img.illu {display:block; margin:20px 0; padding:10px; border:1px dashed #aaa;}
</style>

<script type="text/javascript">
$(function() {
	$("span[rel=popover]").popover();
});
</script>
<h1>Как пользоваться сайтом</h1>

<h2>Идея</h2>
<p>
	Нотабеноид устроен <span class="note" title="не очень">очень</span> просто. Здесь можно взять текст
	на каком-нибудь языке, разбить его на маленькие фрагменты и выложить. Затем
	<span class="note" title="или не разные, а те, кого вы сами тщательно отобрали">разные обычные</span>
	люди приходят,  смотрят на эти фрагменты и, если им больше нечем заняться, берут да и переводят какой-нибудь из них.
	Потом <span title="Кря-кря!">крякают</span> от удовольствия и переводят ещё парочку. А потом ещё и ещё.
	Если кто-нибудь думает, что какой-то фрагмент перевели плохо, то он может предложить свой вариант.
	А другой такой случайный прохожий может посмотреть на два, три, десять разных вариантов перевода одного
	кусочка текста и выбрать тот, который ему больше всего понравился и, извините за выражение, "залайкать" его.
<p><p></p>
	Из самых "залайканых" версий и создаётся итоговый перевод, который можно скачать в виде текстового файла
	<span title="ставлю десятку на то, что когда они начнут поддерживать новые форматы, текст справки опять никто и не почешется исправить.">или</span>
	<span class="note" title="Сейчас доступны форматы SRT, SUB и SAMI">файла субтитров к фильму,</span>
	который можно скормить
	<a href="http://videolan.org/vlc" title="Это далеко не единственный хороший проигрыватель мультимедиа, но мы рекомендуем именно этот." rel='nofollow'>медиаплееру</a>
	и
	<span class="note" rel="popover" data-content="Вообще говоря, такая модель работы хороша для двух взаимоисключающих случаев.<br /><br />
		<ol>
		<li>хочется перевод хоть какой, но лишь бы поскорее</li>
		<li>пусть хоть через год, но чтобы текст был - улёт</li>
		</ol><br />
		У нас тут на Ноте можно работать и так и сяк. О том, как это сделать &ndash; читайте далее.
		А наслаждение &ndash; очень лабильное ощущение." data-title="А если серьёзно">насладиться</span>
	аутентичными интонациями актёров в совокупности с толковым смысловым переводом.
</p>


<h2>Проект перевода.</h2>
<p>
	<a href="/book/0/edit">Создать</a> проект перевода может любой <a href="/register">зарегистрированный</a> пользователь Нотабеноида.
	Прежде, чем создавать новый проект перевода, имеет смысл <a href="/search">поискать</a>, не переводится ли уже нужный вам текст.
	Пустые переводы (куда не загружен текст оригинала), могут быть удалены с сайта.
</p>
<p>
	Для удобства работы, переводимый текст можно разбить на части, которые мы почему-то называем главами. Главой может быть
	глава текста, серия многосерийного фильма, текстовый файл локализации программы и т.д. В каждую главу загружается
	разбитый на <i>фрагменты</i> оригинальный текст.
</p>
<p>
	Внутри глав и происходит процесс перевода. Всё очень просто: слева - <i>фрагменты оригинала</i>, справа - <i>версии перевода</i>.
	<img src="/i/help/translate.png" class="illu" width="935" height="165" />
	Чтобы добавить версию перевода, нужно нажать на красную стрелочку <span style="color:#c00; letter-spacing: -1px;">&raquo;&raquo;&raquo;</span>.
	Цифры рядом с версиями - рейтинг перевода. Если перевод вам нравится, наводите мышку на рейтинг, нажимаете на появляющийся знак &laquo;+&raquo;.
	Захотелось поговорить? К вашим услугам комментарии к каждому фрагменту оригинала, раскрывающиеся от нажатия на кнопку <i class="icon-nb-comment"></i>.
	Правда, чтобы в полной мере насладиться всеми этими интерактивными прелестями, придётся <a href="/register">зарегистрироваться</a>. Незарегистрированные
	пользователи могут только читать и скачивать переводы.
</p>

<h2>Права доступа</h2>
<p>
	Нотабеноид позволяет гибко настраивать права доступа к переводу, указывая, какие <i>категории пользователей</i>
	могут совершать различные <i>действия</i>. Действий сейчас 13 штук, и 6 самых важных из них обозначаются иконками:
</p>
<ol>
	<li><i class="ac_read"></i> <u>Войти</u> в перевод. Самое главное действие, определяет, кто может вообще попасть на любую страницу проекта перевода. Если запретить кому-либо входить в перевод, то он не сможет делать с ним ничего больше.</li>
	<li><i class="ac_trread"></i> <u>Видеть чужие версии</u> перевода. Пользователи, которым нельзя видеть чужие версии перевода, видят только те версии, которые добавили сами.</li>
	<li><i class="ac_gen"></i> <u>Скачивать результат</u> перевода в виде текстового файла или файла субтитров.</li>
	<li><i class="ac_rate"></i> <u>Оценивать перевод</u>. В настоящее время пользователи, которым разрешено оценивать перевод, могут ставить чужим версиям перевода только &laquo;плюсы&raquo;. &laquo;Минусы&raquo; могут ставить только модераторы, однако, эта политика может измениться со временем.</li>
	<li><i class="ac_comment"></i> <u>Комментировать перевод</u>.</li>
	<li><i class="ac_tr"></i> <u>Переводить</u>, то есть, добавлять свои версии перевода фрагментов оригинала.</li>
	<li><u>Читать блог перевода</u>.</li>
	<li><u>Комментировать посты в блоге</u>.</li>
	<li><u>Писать посты в блоге</u>.</li>
	<li><u>Анонсировать перевод</u>. Анонсы перевода размещаются в <a href="/announces">общей ленте анонсов</a>, а пять последних анонсов публикуются на <a href="/">главной странице</a> сайта.</li>
	<li><u>Редактировать оригинал</u> &mdash; добавлять и удалять главы, редактировать их название и статус, задавать особые права доступа к одной главе перевода, импортировать текст оригинала, редактировать фрагменты оригинала.</li>
	<li><u>Редактировать описание перевода</u>. Эти пользователи могут редактировать название перевода, аннотацию, загружать заглавную картинку, выбирать раздел каталога, где будет размещён перевод.</li>
	<li><u>Управлять группой</u>. Пользователи, которым разрешено управлять т. н. &laquo;группой перевода&raquo;, могут рассматривать заявки на вступление в группу, отправлять приглашения, банить и выгонять пользователей. А о том, что такое &laquo;группа перевода&raquo; мы поговорим чуть позже.</li>
</ol>
<p>
	Для каждого из этих действий, можно назначить <i>категорию пользователей</i>, каковых современной науке известно четыре:
</p>
<ol>
	<li><u>Все</u>. Для тех действий, в результате которых изменяется состояние перевода (поставить оценку, написать комментарий, добавить версию перевода и т.д.) &laquo;все&raquo; &ndash; это все зарегистрированные пользователи. Для действий типа чтения перевода или блога регистрироваться не нужно.</li>
	<li>
		<u>Группа</u>.
		Ограниченный круг людей, определяемый создателем перевода или модератором. Существует два способа стать членом группы перевода &ndash; подать заявку, которую потом примут или
		отклонят <span class="note" title="Или создатель перевода, смотря кто указан в правах доступа к действию &quot;управлять группой&quot;">модераторы</span> перевода, либо
		получить персональное приглашение от тех же модераторов. Правила вступления в группу определяет создатель перевода в редакторе прав доступа. В переводе может и не быть
		никакой группы вообще. Если выбран режим группы &laquo;после подтверждения модераторами&raquo;, то вступить в неё можно, нажав на соответствующую кнопку на странице участников перевода:
		<img src="/i/help/group-join.png" class="illu" width="590" height="291" />
	</li>
	<li>
		<u>Модераторы</u>. Модераторов назначает владелец перевода из членов группы, если она есть, или из тех пользователей, которые оставили хотя бы одну версию перевода, если группы нет.
		Помимо тех действий, которые разрешены модераторам явно, они всегда могут редактировать и удалять любые версии перевода и ставить им отрицательные оценки.
	</li>
	<li><u>Никто</u>. Из этого &laquo;никто&raquo; есть единственное исключение: создатель перевода. Он может всё.</li>
</ol>
<p>
	Если в переводе несколько глав, то для одной из них можно указать отличные от всего перевода права доступа к первым шести действиям. Это может быть удобно,
	если вы, например, переводите сериал, добавляя новые эпизоды отдельными главами и хотите на время перевода одной серии ограничить доступ к ней.
</p>

<h2>Я ничего не понял!</h2>
<p>
	Лучший способ получить ответ на любой вопрос о Нотабеноиде - <a href="/blog/edit?topic=65">задать</a> его в <a href="/blog?topic=65">специальном разделе</a> нашего коллективного блога.
</p>