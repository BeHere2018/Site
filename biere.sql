PGDMP     4            	        v            biere    10.3    10.3                 0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false                       1262    16397    biere    DATABASE     �   CREATE DATABASE biere WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'French_France.1252' LC_CTYPE = 'French_France.1252';
    DROP DATABASE biere;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false                       0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    12924    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false                       0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    16400    biere    TABLE     f   CREATE TABLE public.biere (
    id bigint NOT NULL,
    nom text,
    url text,
    degree numeric
);
    DROP TABLE public.biere;
       public         postgres    false    3            �            1259    16398    biere_id_seq    SEQUENCE     u   CREATE SEQUENCE public.biere_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.biere_id_seq;
       public       postgres    false    197    3                       0    0    biere_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.biere_id_seq OWNED BY public.biere.id;
            public       postgres    false    196            �            1259    16411    personne    TABLE        CREATE TABLE public.personne (
    id bigint NOT NULL,
    mail text NOT NULL,
    pseudo text,
    xp bigint,
    mdp text
);
    DROP TABLE public.personne;
       public         postgres    false    3            �            1259    16420    personne_biere    TABLE     �   CREATE TABLE public.personne_biere (
    index_personne bigint,
    index_biere bigint,
    arome smallint,
    gout smallint,
    palais smallint,
    apparence smallint,
    note smallint
);
 "   DROP TABLE public.personne_biere;
       public         postgres    false    3            �            1259    16409    personne_id_seq    SEQUENCE     x   CREATE SEQUENCE public.personne_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.personne_id_seq;
       public       postgres    false    3    199                       0    0    personne_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.personne_id_seq OWNED BY public.personne.id;
            public       postgres    false    198            z
           2604    16403    biere id    DEFAULT     d   ALTER TABLE ONLY public.biere ALTER COLUMN id SET DEFAULT nextval('public.biere_id_seq'::regclass);
 7   ALTER TABLE public.biere ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    197    196    197            {
           2604    16414    personne id    DEFAULT     j   ALTER TABLE ONLY public.personne ALTER COLUMN id SET DEFAULT nextval('public.personne_id_seq'::regclass);
 :   ALTER TABLE public.personne ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    199    198    199            �
          0    16400    biere 
   TABLE DATA               5   COPY public.biere (id, nom, url, degree) FROM stdin;
    public       postgres    false    197   N       �
          0    16411    personne 
   TABLE DATA               =   COPY public.personne (id, mail, pseudo, xp, mdp) FROM stdin;
    public       postgres    false    199   �<       �
          0    16420    personne_biere 
   TABLE DATA               k   COPY public.personne_biere (index_personne, index_biere, arome, gout, palais, apparence, note) FROM stdin;
    public       postgres    false    200   7?                  0    0    biere_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.biere_id_seq', 1749, true);
            public       postgres    false    196            	           0    0    personne_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.personne_id_seq', 29, true);
            public       postgres    false    198            }
           2606    16408    biere biere_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.biere
    ADD CONSTRAINT biere_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.biere DROP CONSTRAINT biere_pkey;
       public         postgres    false    197            
           2606    16419    personne personne_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.personne
    ADD CONSTRAINT personne_pkey PRIMARY KEY (id, mail);
 @   ALTER TABLE ONLY public.personne DROP CONSTRAINT personne_pkey;
       public         postgres    false    199    199            �
      x�͝�rG����SĦ�Xf-���o��D�E�0��dcVfe D1���̤D=�,f1���r���D&����)�R	q��?~�C����ˢ�讚�����蚗�x�/�.����{�l�V�g�as�/�����p�ll��i׍�����{��^���_�Al������_?���?D{=�����ǿ/��1?��x�>ޫ��i�h�i^��E��	���t��?i����0��P2*w4E�Gя�L�gHt��j�����j����,��ڸ7 >z~z�~�����Ͼ����l��ͫnռ�e��Oc����&8�~�pl���_7�?->v���5/���;����c�H/�Y�zl��7|���U7~��xa��{�}>M#����>m�}Bh�Ќ5/Cz��&�������ds �d:A2c�$+F�lтdw���؎}����y�8�E������/��'&����fz~&ѷ)��ˣO���^\�Ȱ��r� �٣$:vO8�=�p욧?��E�����!���Hys#Ps#�`n�@̍�̍�͍�̍�͍�
,��b� KuN�����l�B�l���ыI�㰺��Mf&��6j��g�}��/T��j���/��|�3_hD��f��4Q���t��lH��?�hD�}�$��'�gq±�S�8.=�9����2v��.����dX~j��\lN�ܜ�)1���g6�.�L�R�s��w��[{ў�<�;J1�3���k��,l�d�k'q�3u�{G���q���	r�wz 󽳇1�;���G��|�"f���6�0|X|Z6o��G���S�t7��l���O�7O���S��Xq4��x���n���e>Oa���l��>�_��z;�g�����ӬS�3˔��+Ʊy[ϱy����;6_�B�a����`�&T��l�&���h�&B�&H�&�*4]���
MUh"#[�c��ulq�3�ew�n��=޷�r�M��	Y�o��қt�<c���ߟ��e7N��(�e�Y�G���GM/�@Hx�J�+�T2��ɕ �*�s�d\�J�C�j2Z�[�������������G���#5��=Ћ~H��t��z�Yw��۱˔IV���H �1�Dᘉ�2E�gN��ڦ��j�fb��fb��fb�h��}�45Í3��y�ɸ�q�4�b��Y��q�g���Yj��&���Y܁�y�qQ�,��r�X�ƪ�X��<��q��
))��kʤ�r"xu����ʤ�2)��LZ��l�e[��l�T�-��l��e��,�Z�e�,[@e�b+�� *��P*�UYv2�N+dgAٹR�a*�_Av�
��_A��*�]A��
��YA��W��q��<�y�+��3V*���=eE��N2�!8ɠ�$�9ɀ��+�<��IÞ6BE�@�(�R.5ĥn��.5
إF��R���u\�1�R�~d�K���K�u'�\*����:3�8��F��E6
��ll���������	��i/���-���`y&�9q&�Aq&�Iq&��-�4ky&����f\�[0�zނg��0o���Mۼ�6���ih�tw�%��tf�uf�	u�JGԙ�gԙ�����@�����f��;�j�����މQމ�y'�x'�{'A{'��w�w�w���I*x'�vk��.�ճ��t��Z�4�ԛ��b3+����T3+������
n�a[���m�f��f��f��y��e�l3�桉���Mڜ����L�S/�8�����S�3�BW�<;�y,v��X����U?����ή\��� ˦^�,���7��;�<}�.��UAx3�g���<���		O/��髷�G�i|A�2݄<i�V�y%!����|}�"a|q�4aBE��	�
�1�U[�ؓn�r���ɑg���,ڭ�/��b�����(�Xl�����N�Y������y_�Ż=�M}�HyǊ[�S1P�SqYyO��Xy�+���tL��tmq=�t�1P�b��e{u���Oï������U��%�l�l]0}�y�'1)�����_���_��J)�XU�d�%�%Q���-$P�N]�e%J,Q�ז'��J4�H��]��Ű^/��L���`f���p`SLP�N]�e�(�; �@�V(�Ze�"���i7^4'�b��g��=�0
b-���`j&.�a0
�j�GDk�Q,J��r_M�+��S���)ѺE �ZrTA�Q��fQ[K�
�5��KA�%��5(�X�r-�Xl��j�ܵ�Z�:X�V�A�lݲ�3�r�*�\5.����ݢ�Ϳ��.����v9qՖb�s��k����=��vݯ&O��6��y=v�6�m��X���P�y�3�z�>��2�g������Y�n�\L�u>���y2vW۳��.���\���~�|:�jd�02y�J'_5��/�fz��M��BW�Ά��c�\0@�BU@��QA�5lkϚ�ן�8�'D�o��a�n�ӿ�C(��i��(��4
]�*���n�Y�RƵ˳˔s?_��mҽ��Ѽ��U�Ӊ���!VL�h*'{��h�d�J���6�òm���y>��g�T�c��hMEE[_Q��T����X,Ư\YE�1���**JOC\u��a��y~�ܬ�Ч�ݧ��E��7.���Ju-��zZVc�jY�W6�e5�*����r���$���NM/Ʃ�ON�+'25125~��q}�P��R��R��hE���P#�`��vٯ�C��^G�����D�*���� X�5YŵY������8B���/:n�i�����|�h?�L�`L�v=p1\R\R\r �������� � �%U�%	\��ӣ<�~Ws��;n��݋��n%f�'�z�F5 lj��V+q����f�Kk���,��,��,�G�ڏ���2�r��1�����ZS�� x�� e P�&�lm@Y�l@�p��[�c�����]u�<	DF�'ħ4�5Q�����pjh/�B'�P�>
]m9��O\HZt���r��K�f�Z��S6d�o����`�Vw<]D�pjf�BO8z�©��8��: ��{��#8��q�O�huݍ����	��}��&�`�	U���	���	ը�Lͻ�<Oո7WM���W}�-�B�EW.�b�EWD,�b�EWT�꣭����c�[7f�T�v�~K�&a��5	�r0�XS�0� c�`tnM��tӯVò�*y2�<{�&E�Fkpt��<]�A�Ś�t! ]��e�A'�!q�j�D�MJ�LE_�]�  �BU	�@�0���|����c��w�u�_�m�d���}wP�>�*8�z8�8a N��ᄫ�D�8N��p���C�o�r۫��*?u�ｵ*����W�^�q���@VP�@V��P?���r�-��W�������ؼ_���B]�٘d�v7	L�-U(�����V����rK�[S�oinY��E��Vb�������M�98�{Q%�L+k�����l��;u����8XM͹�a�Pq��J#���qU�ʚ4`:����VO9/sU�/Z_	�4,<_�,,<>}���5d���oi�%!3=�` TGK8��[�U��lq4 ��!���-%��l�220���� E��X��E��X�o�&D���ˤ��I_��a��s� �Y��� &R�W��3�1��@1�LѦg\i�:��tu�)�9ξ��a\p�Bp�*q�Js��\ ,�.9�p�#�K�n0o��?ϓA��uS !A�D.M��k9��ze{�y���I���~5�ݢ��3}`;�v�bI�1�`,��B��J��Ұ)�^ъ�{t�4�����y�ݞ�
��BP�(
�U..X���U�	V�ћ~y�]��U�z�m~��y� {Y�A�BР(4(�Kŕk��y��}�_^L*��_�n�t.!=��&*,�
�A���¢Paa�pT��p|����.����k^�<݋����y9n�oӿkW}�W&�xs�+��9���\�8�B�9�f�Av@\���<}���i^�ݸ�t�Uw�)�T�,<=F_,_,    �ǀ�C��Q`	0��
`	<�y��<�Gv����6Â�j�cX�(�� aX@�%��+�%����%��k�%��at���J�p1�|E���,Fo�E[o*m��m�Am�q1z�+�1����\tw����ȓ%�x�{u���g���r���K��}͛��p�Ԇ2�!C�)
2d�:�x�D�A���1C�
0�A�6؀�S!3J�,0�>��/}ּ6�������n�������闰x�ã�=�� �Q �O!�>�@��ã�,���<�F�^�<o���x���@�k�`j��� Y�qX$g��|���.���t P2@� }�	f�Z��f��Ғ8I&�l��[��Wc���̵M���̚P�%��-��o�~�0�[[X{���g=N{���ڋ@���hSX�`:�:������w����],��aю��a����Jq�5/�E�g��Xg�^t���Y�
�C��
�G���v�+�b��1i��l���6���H����������,�!�����W��ҫ&*�2>�}��؍��ه��z��>�;	�h7�£hB�!���S3�A�x����C��I���~�];m���H�p t�U�qt�8:�C�SD�)�.EW��QP�'EL���e���C�ޣ=S�Daj���!��v�����C0�&�y�N���/��`5I`<<�)�h��p�:�}7tm;���dG�=��bhU�ӣ�)�~re�O����Q
A�ۑl��i�]{����^��.6��!�-��\U����Yy����(?��D�Q��(�6��D#\�b�rl�ɉ�����3�y�c�'y��2���-�L��B�TyP���<j����G�� �����Wo8�>��7So�����*SR���o#��#7�Ql��rYn��	�}�_n�-��aӻa��^h�5Gَ�(=Fi5Fٺ��e3�������8JX��}LpJ؇X��ģ�n%�)�T�(��Ju\^�N�~hW�[4��A�yk�gt�~T#8�!�Y8�C�#�=&ܣ�obY$x@��H����6��1��;	�0�S�W���C��+�?���}�]}�a�x���o�f��V�~Os���"��8q��;<����C���; J����P�K<��n���zl�o�1��$�<;}�s�]%F|$��#�b\��!�@�}�l�J�"��4�+3�s��P$�*?"���	?G?��X�~4�!�h&�h,H��8���p�G08��C�=��'��?���얧�f�h�9�9 �gtV��Rl����/�
}�)��ԇ0����4Y����5M�i
@M��Ŏlp�fk����Yv�t�.۳����������(�p�0!DG���������a����
�����iH�慔�`y!0^�R�����#D�j�V*�ae��UPViX-^�� V�Ӱ��#X��װ%��-�4l/-�iY��K�"-���
���r%-Gxi9��H�;缳�s�9l�W�Jq�ŉ�,N<zq��/N<vq�1��hf����Xfx�yS��b�7�M����%E��"h�(ǰ��Oc{}�5�}Ӟ���;�$�u�b��F�E䈢9zӥ�4���yּ�כd�c7��ݔ�T�F�>@�>@���N_��G�]�b��A_��}n�ݪ�[��V�6�8ޝc��D�c��D
B��H��)�R�k��n����x�y
���K��m��vg�vl��}�{�\�}z�y��%����)���#��@�	��K�����̷��&��D�ξ��H�UI]��0�mH
���e�,��w�p�'_<;�*_����!���?����2]�ngW�����G:�?���y=,R��<�ҫ��^�<Y�c���S��/�{$cb��M06lT��Qa�Qa�Q��&#K#d�`�)T��ӧ��j����v�l܊w���6� �,:��M��=W#D��Pvꇱ�>d:x�����G瀓�xФ#�)=�H�N:j�N:J�IG?�@�գ��؝��ͪ	͋q�장���\%Ö��$�s��|�?I͛��?k���1\e��������j�Կ	� 5"&@k`�%�h��Z���ZO��b'@��N��C&@[aAd�lFr7�5��7�Fgf��d��L���l�[A�ѓ���Yqrw��t�r�_u����mN���u5���IV���>䛔�� Yc�`fx���RL��q�<�Cy�0�a<��x���(��ƃ=���a<���
�=L {�@Go����m�m3�\�{}�.���I�����?��G4�<O���̛qi�'h���i
n��Û�౦)�j�ij����ٙ�3M�Q���a��:lK��h��):�i�빭d���p˚�ᦉ���&2�&�]
�I$����V��1ԥ��K#�P�FƂ]M��\ZZS�]Z�p�Fwͻ�F���h�FD�Fw��%]��\��\�Ź4���-�҈<֥�]�n�D9NDl�	皘���o\�6I^��<�#����1n_�b�[�?c��g����CU�������]?/ȟ	W�g" &��g;M�e��8�?��,����W_J���������Ig�t�1�y�9�>�z3���NyJ�&�h��*خ�E�5uX��k�4`�F�]�����5Kp�fo��:~Avm��h׬ٵ��ߢvm���5Pv�F��r�����Q]��G�����m�dz����)έM-�x��ح9�rk.`ݚ�X��֭yB�5�Uݚ�[�wkw� ��]5��=ȭݷ��tk>��Z0(��WNQ�`b����	��q��0"ĳ;x�&����~q��s
�B�:�h��)�9E�H�UODR�����?I{"�b��A'")"ND����d�:�S��l��_��N��Bvwd�32lpF�M#æ��a62lPFF����zl�L�d?M�N�	딘�N�	픘�:%&�Sb�;%&��L�,&�S�O�lp;����+L�\��܉Ì��a�v�0c;q���8��N���8	x�yW�8,��9Dq3�X��!���!���!<sHD�����{q+��V�&9+~����A� �H�W���o�����锆�5(�Y0l,6����@;ckT�m���EW�-��̶B�ƙ�Ǐm�[}��O?�p"p5*4�J��)*']��\ٜ|����P#'c����)��N�M�	���������_�N��ǧ_��{��s�4�����&����\4_=p��?`Z�端��"s��[��-�~m�Tq���]��P6?c��	hm��/)�e��jн�Q�C�� ��Z4;���47�4m�d
4�ioV$�DvHvĢ�Mzg���@#��q�O`̈J�(��~Q�m��s�����/�[��U�ʹ(�m/��1Y.�@��!@��)��#e�\���\�Ed���sVB�J�)j%�
[	!��{ﯻ��ʹk���A��	DO� =�==�C�|Y=��z�(=1j �=����zzb��^{X�'�������}��M��	�3��3�e��t� �P�@��"�2��-,]qG���Y׼�.�<���W��d��#��n�����[L�,Ӷa���	PH�B�>;(
s�q�r
������`�Xh�W����L��b�������Ra�XX]�b�U���`w�0uE^dj����I�z�l�"�F ��A!�A�#�a��P`p���`p(0�dR�nzG�Oc{}ݯ��t4+ϓL�?�E�Yq�"o�,��� y)�"�yU�w���s5���G��"# �`�(d���d,2�?0�
x/�݌Ĩጚz ���dTd���H���Ǣ��XxD4<"1�o��yݍW�o���#�f{�5��M���S���V2�Z:uF⨥�q�R# j��9���N��%��Z�P�DJQK���W��^�j�S�GI)ZjbFZ*���pZN}�@Z�i9�\B6�Uey(��zH1�Q��0~ĞcS%�1��g��
d[ æ�O��F#� d  +!FЈ�Z�b��"F���I�$��@z�&�/�"2J>���繍W�4�&��"���I*P���E�v_$o��U�����b����quXa��$�G�N9a>N��´�r�%�R,�b��u�b-X)��R�#.��R�K.{��o~�J�כ�O���k�<������n��a7��nz�����U�u��Y�Ӫ{Je��l�<��)�xrK�q�5o��a��>�g�Ȳ�y>M�P^��J�4�^��Z�4ϵu�o�ӷ�o)�3}FW�,ʔI^����N^��Jk5_�%G}u�B,�+{T^,!�h}ܼ���ح�c�H3ݒ��vt/L��+���ʊ3�:���F<D#_Y!�F"V#�`5�˲X��D����O��\u�\��\�s5r��͛�M���f�<?]7�y��Y��O�Y��:�`��5X�c��XS��c��hÃ��❌�0f�����<�Ƌx-��j��E��q,!<�%��՛o�fJU{�J+ErX)��"�eQ���~)�,�ff�,xr6�b�6����g��]�������x�.����Փe���2�F������^"�>C
'���G^�"�_&�tcr�i8�x�-�o�q�듻f��۷��TʊN<Ht�,)-�����AScr��T>z��ج��?��q!2:�栿�K)+U���Q��G�k��qR�����,a�`+�O��R�Z'5�=�iX^��C�nbޭ�3E�0�xk���_�-�� �þk)�����zp�\��
zp�t���)h�u��y�INqt�6����`�x�ȁ7�\�#Ao�re�~jx��n�pu{���c���Ũۃ�B�WR[(��XAm�������*���y��Pi���g� ���[��:O�������%_��>W���|1i�PC�.�hpҎ�RJ�:Z��ZT��b��t/��>��LSqJHo�T]1UG_A�1�U���:cv����k�__g��Vɋ�Kg�O�a��Q�����+��V�3���W8���}���n�~j�_������J�"��tS@�I�-m��I�I�*��8rpi��I�Bi�{iߞ���%�g7�l/;u�f	�X�p�0�%\�%\�%�g	{��9�����: [������~���y"8��'㉔�����y"x"s�L����4M>���޶�D;5X�)�	���'
+�h��a�`�p�(&v��O�� �?��GXxY����u�E��8���q�ؾ��Hb�$����n��j��y�9=���f^��Z���r���0�� �,ZΡ��<Z�.�T��&lM<ؚx�5�8k����ì�wh�{?Sy�G6:{��P��qXv��a������"��E���v�q9��|J@�� �)�SڧX�$X�ȃ��<x���.U&�ټ���Řf�8�D4V"+����JT�أ��=:�أG�=�VA�
��
��
��
�F�b�FQb���h�s�}e#b�L<���4_����4_��-w��I�r'�;9�����N�>l���w�b��S3\},`������>vX�1���9�s3�sS:7�`�)��M����A�����	�\��\Q�%t�(�^�
�*�Z�t��
/�(��(7?~������t�      �
   [  x��Sˊ1<{��~`۲��@�C�S���m�%�;��@>?R�l�!�0fZ�%M�Tr���1��E����/��K��=����hL�zc�����[4O�����Fݵ���ۏ��o��d�ؐ��sG���P;�t4Vgd����s���btLSE�hV�&!�H#��n˙�+�'�={Ċ\�H�bX���=i�5'��gW�Y�^��j8��r+%��w6�9��/�+\DgE�z�Fn\�`�RA]�Ԋ�A�㐚����a
 !�ZY}�V|�k"��`�d%N:�ⷒAB�������9h��f��J�@r�Jƈ���ķ�\ހty�e�v����*7��l�.��y-��̤���KD�������I�q�C������-d#:�ǢiH�U��PdO�jY�+�;�N���ܞ�l�gB�K�9��X&d�D���6��-���Qu����dY��^O�EfU��>Ԑ��f9Һ����핖k]: c�Q��MޛW�ɠX:��"YtJ(~G�ƹ��iu\��9:��s�r�Fs���/�w�w@������,�TJ���~�]ѷ�#q��rd&{	s����p�:N:�      �
   �   x���a� ��]��C�v����?�]:�d�6�����$(\�4���EN!?��ŧ&-R/iH��woE+)�)���H:eU6ِ�-��
����!�VR~A&�;jO���a6[�e9�m��G�X���|
��`�b��萌gg�P��mF=����k�JCٮ���R]����o�     