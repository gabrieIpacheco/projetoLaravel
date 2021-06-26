toc.dat                                                                                             0000600 0004000 0002000 00000025240 14065267000 0014442 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        PGDMP       ,    /                y         
   projetoMvc    13.2    13.2 )    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false         �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false         �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false         �           1262    32927 
   projetoMvc    DATABASE     l   CREATE DATABASE "projetoMvc" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Portuguese_Brazil.1252';
    DROP DATABASE "projetoMvc";
                postgres    false         �            1259    32961 	   avaliacao    TABLE     s   CREATE TABLE public.avaliacao (
    id integer NOT NULL,
    nota integer,
    descricao character varying(500)
);
    DROP TABLE public.avaliacao;
       public         heap    postgres    false         �            1259    32959    avaliacao_id_seq    SEQUENCE     �   CREATE SEQUENCE public.avaliacao_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.avaliacao_id_seq;
       public          postgres    false    207         �           0    0    avaliacao_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.avaliacao_id_seq OWNED BY public.avaliacao.id;
          public          postgres    false    206         �            1259    32938    consulta    TABLE     �   CREATE TABLE public.consulta (
    id integer NOT NULL,
    descricao character varying(200),
    data date,
    hora time without time zone,
    especializacao_id integer
);
    DROP TABLE public.consulta;
       public         heap    postgres    false         �            1259    32936    consulta_id_seq    SEQUENCE     �   CREATE SEQUENCE public.consulta_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.consulta_id_seq;
       public          postgres    false    203         �           0    0    consulta_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.consulta_id_seq OWNED BY public.consulta.id;
          public          postgres    false    202         �            1259    32930    especializacao    TABLE     �   CREATE TABLE public.especializacao (
    id integer NOT NULL,
    descricao character varying(30) NOT NULL,
    imagem character varying(100)
);
 "   DROP TABLE public.especializacao;
       public         heap    postgres    false         �            1259    32928    especializacao_id_seq    SEQUENCE     �   CREATE SEQUENCE public.especializacao_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.especializacao_id_seq;
       public          postgres    false    201         �           0    0    especializacao_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.especializacao_id_seq OWNED BY public.especializacao.id;
          public          postgres    false    200         �            1259    32972    sugestao    TABLE     `   CREATE TABLE public.sugestao (
    id integer NOT NULL,
    descricao character varying(100)
);
    DROP TABLE public.sugestao;
       public         heap    postgres    false         �            1259    32970    sugestao_id_seq    SEQUENCE     �   CREATE SEQUENCE public.sugestao_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.sugestao_id_seq;
       public          postgres    false    209         �           0    0    sugestao_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.sugestao_id_seq OWNED BY public.sugestao.id;
          public          postgres    false    208         �            1259    32951    usuario    TABLE     �   CREATE TABLE public.usuario (
    id integer NOT NULL,
    email character varying(50) NOT NULL,
    senha character varying(32) NOT NULL
);
    DROP TABLE public.usuario;
       public         heap    postgres    false         �            1259    32949    usuario_id_seq    SEQUENCE     �   CREATE SEQUENCE public.usuario_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.usuario_id_seq;
       public          postgres    false    205         �           0    0    usuario_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.usuario_id_seq OWNED BY public.usuario.id;
          public          postgres    false    204         >           2604    32964    avaliacao id    DEFAULT     l   ALTER TABLE ONLY public.avaliacao ALTER COLUMN id SET DEFAULT nextval('public.avaliacao_id_seq'::regclass);
 ;   ALTER TABLE public.avaliacao ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    206    207    207         <           2604    32941    consulta id    DEFAULT     j   ALTER TABLE ONLY public.consulta ALTER COLUMN id SET DEFAULT nextval('public.consulta_id_seq'::regclass);
 :   ALTER TABLE public.consulta ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    202    203    203         ;           2604    32933    especializacao id    DEFAULT     v   ALTER TABLE ONLY public.especializacao ALTER COLUMN id SET DEFAULT nextval('public.especializacao_id_seq'::regclass);
 @   ALTER TABLE public.especializacao ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    200    201    201         ?           2604    32975    sugestao id    DEFAULT     j   ALTER TABLE ONLY public.sugestao ALTER COLUMN id SET DEFAULT nextval('public.sugestao_id_seq'::regclass);
 :   ALTER TABLE public.sugestao ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    208    209    209         =           2604    32954 
   usuario id    DEFAULT     h   ALTER TABLE ONLY public.usuario ALTER COLUMN id SET DEFAULT nextval('public.usuario_id_seq'::regclass);
 9   ALTER TABLE public.usuario ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    205    204    205         �          0    32961 	   avaliacao 
   TABLE DATA           8   COPY public.avaliacao (id, nota, descricao) FROM stdin;
    public          postgres    false    207       3030.dat �          0    32938    consulta 
   TABLE DATA           P   COPY public.consulta (id, descricao, data, hora, especializacao_id) FROM stdin;
    public          postgres    false    203       3026.dat �          0    32930    especializacao 
   TABLE DATA           ?   COPY public.especializacao (id, descricao, imagem) FROM stdin;
    public          postgres    false    201       3024.dat �          0    32972    sugestao 
   TABLE DATA           1   COPY public.sugestao (id, descricao) FROM stdin;
    public          postgres    false    209       3032.dat �          0    32951    usuario 
   TABLE DATA           3   COPY public.usuario (id, email, senha) FROM stdin;
    public          postgres    false    205       3028.dat �           0    0    avaliacao_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.avaliacao_id_seq', 6, true);
          public          postgres    false    206         �           0    0    consulta_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.consulta_id_seq', 34, true);
          public          postgres    false    202         �           0    0    especializacao_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.especializacao_id_seq', 19, true);
          public          postgres    false    200         �           0    0    sugestao_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.sugestao_id_seq', 6, true);
          public          postgres    false    208         �           0    0    usuario_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.usuario_id_seq', 1, true);
          public          postgres    false    204         I           2606    32969    avaliacao avaliacao_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.avaliacao
    ADD CONSTRAINT avaliacao_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.avaliacao DROP CONSTRAINT avaliacao_pkey;
       public            postgres    false    207         C           2606    32943    consulta consulta_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.consulta
    ADD CONSTRAINT consulta_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.consulta DROP CONSTRAINT consulta_pkey;
       public            postgres    false    203         A           2606    32935 "   especializacao especializacao_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.especializacao
    ADD CONSTRAINT especializacao_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.especializacao DROP CONSTRAINT especializacao_pkey;
       public            postgres    false    201         K           2606    32977    sugestao sugestao_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.sugestao
    ADD CONSTRAINT sugestao_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.sugestao DROP CONSTRAINT sugestao_pkey;
       public            postgres    false    209         E           2606    32958    usuario usuario_email_key 
   CONSTRAINT     U   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_email_key UNIQUE (email);
 C   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_email_key;
       public            postgres    false    205         G           2606    32956    usuario usuario_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_pkey;
       public            postgres    false    205         L           2606    32944 (   consulta consulta_especializacao_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.consulta
    ADD CONSTRAINT consulta_especializacao_id_fkey FOREIGN KEY (especializacao_id) REFERENCES public.especializacao(id);
 R   ALTER TABLE ONLY public.consulta DROP CONSTRAINT consulta_especializacao_id_fkey;
       public          postgres    false    203    2881    201                                                                                                                                                                                                                                                                                                                                                                        3030.dat                                                                                            0000600 0004000 0002000 00000000147 14065267000 0014241 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        1	1	estabelecimento ruim, sugiro fechar
2	10	otimo atendimento
3	6	
4	10	nada a comentar
6	9	dddd
\.


                                                                                                                                                                                                                                                                                                                                                                                                                         3026.dat                                                                                            0000600 0004000 0002000 00000001651 14065267000 0014247 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        4	consulta de rotina	2021-05-15	04:00:00	1
6	consulta de rotina2222222222	2021-05-15	15:30:00	2
12	consulta de rotina	2021-05-15	13:30:00	1
14	consulta de rotina	2021-05-15	15:30:00	1
15	consulta de rotina	2021-05-15	14:30:00	2
17	consulta de rotina	2021-05-15	13:30:00	1
18	consulta de rotina	2021-05-15	14:00:00	1
19	consulta de rotina	2021-05-15	15:30:00	1
20	consulta de rotina	2021-05-15	14:30:00	2
21	consulta de rotina	2021-05-15	13:00:00	1
22	consulta de rotina	2021-05-15	13:30:00	1
23	consulta de rotina	2021-05-15	14:00:00	1
24	consulta de rotina	2021-05-15	15:30:00	1
25	consulta de rotina	2021-05-15	14:30:00	2
26	consulta de rotina	2021-05-15	13:00:00	1
27	consulta de rotina	2021-05-15	13:30:00	1
28	consulta de rotina	2021-05-15	14:00:00	1
29	consulta de rotina	2021-05-15	15:30:00	1
16	consulta de rotina	2021-05-15	13:00:00	5
13	consulta de rotina	2021-05-15	14:00:00	3
11	consulta de rotina	2021-05-15	13:00:00	5
\.


                                                                                       3024.dat                                                                                            0000600 0004000 0002000 00000000364 14065267000 0014245 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        1	Dentistas	8d42mQRxxTdFJWPwYHTmcsyqsc6dSWwgdUf8Wa7y.png
5	infectologista	FmGOqXEwn7HVmb25c7kjaqOkj6suipo475ZeMnUH.jpg
3	psiquiatra	j1lKCwU2uWdSfC2nWB5Ris7vaqOTJQEdQniwlW3O.jpg
2	Dermatologista	26qzQuvWUjWgiuaH36Y9z5Vb1bLk9XR3Bv7dqaY0.png
\.


                                                                                                                                                                                                                                                                            3032.dat                                                                                            0000600 0004000 0002000 00000000117 14065267000 0014240 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        2	mudar a cor das cortina para azul
4	estabelecimento ruim, sugiro fechar
\.


                                                                                                                                                                                                                                                                                                                                                                                                                                                 3028.dat                                                                                            0000600 0004000 0002000 00000000070 14065267000 0014243 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        1	admin@gmail.com	e10adc3949ba59abbe56e057f20f883e
\.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                        restore.sql                                                                                         0000600 0004000 0002000 00000021431 14065267000 0015365 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        --
-- NOTE:
--
-- File paths need to be edited. Search for $$PATH$$ and
-- replace it with the path to the directory containing
-- the extracted data files.
--
--
-- PostgreSQL database dump
--

-- Dumped from database version 13.2
-- Dumped by pg_dump version 13.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE "projetoMvc";
--
-- Name: projetoMvc; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE "projetoMvc" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Portuguese_Brazil.1252';


ALTER DATABASE "projetoMvc" OWNER TO postgres;

\connect "projetoMvc"

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: avaliacao; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.avaliacao (
    id integer NOT NULL,
    nota integer,
    descricao character varying(500)
);


ALTER TABLE public.avaliacao OWNER TO postgres;

--
-- Name: avaliacao_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.avaliacao_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.avaliacao_id_seq OWNER TO postgres;

--
-- Name: avaliacao_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.avaliacao_id_seq OWNED BY public.avaliacao.id;


--
-- Name: consulta; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.consulta (
    id integer NOT NULL,
    descricao character varying(200),
    data date,
    hora time without time zone,
    especializacao_id integer
);


ALTER TABLE public.consulta OWNER TO postgres;

--
-- Name: consulta_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.consulta_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.consulta_id_seq OWNER TO postgres;

--
-- Name: consulta_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.consulta_id_seq OWNED BY public.consulta.id;


--
-- Name: especializacao; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.especializacao (
    id integer NOT NULL,
    descricao character varying(30) NOT NULL,
    imagem character varying(100)
);


ALTER TABLE public.especializacao OWNER TO postgres;

--
-- Name: especializacao_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.especializacao_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.especializacao_id_seq OWNER TO postgres;

--
-- Name: especializacao_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.especializacao_id_seq OWNED BY public.especializacao.id;


--
-- Name: sugestao; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sugestao (
    id integer NOT NULL,
    descricao character varying(100)
);


ALTER TABLE public.sugestao OWNER TO postgres;

--
-- Name: sugestao_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sugestao_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sugestao_id_seq OWNER TO postgres;

--
-- Name: sugestao_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sugestao_id_seq OWNED BY public.sugestao.id;


--
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.usuario (
    id integer NOT NULL,
    email character varying(50) NOT NULL,
    senha character varying(32) NOT NULL
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- Name: usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.usuario_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_id_seq OWNER TO postgres;

--
-- Name: usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.usuario_id_seq OWNED BY public.usuario.id;


--
-- Name: avaliacao id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.avaliacao ALTER COLUMN id SET DEFAULT nextval('public.avaliacao_id_seq'::regclass);


--
-- Name: consulta id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.consulta ALTER COLUMN id SET DEFAULT nextval('public.consulta_id_seq'::regclass);


--
-- Name: especializacao id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.especializacao ALTER COLUMN id SET DEFAULT nextval('public.especializacao_id_seq'::regclass);


--
-- Name: sugestao id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sugestao ALTER COLUMN id SET DEFAULT nextval('public.sugestao_id_seq'::regclass);


--
-- Name: usuario id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario ALTER COLUMN id SET DEFAULT nextval('public.usuario_id_seq'::regclass);


--
-- Data for Name: avaliacao; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.avaliacao (id, nota, descricao) FROM stdin;
\.
COPY public.avaliacao (id, nota, descricao) FROM '$$PATH$$/3030.dat';

--
-- Data for Name: consulta; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.consulta (id, descricao, data, hora, especializacao_id) FROM stdin;
\.
COPY public.consulta (id, descricao, data, hora, especializacao_id) FROM '$$PATH$$/3026.dat';

--
-- Data for Name: especializacao; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.especializacao (id, descricao, imagem) FROM stdin;
\.
COPY public.especializacao (id, descricao, imagem) FROM '$$PATH$$/3024.dat';

--
-- Data for Name: sugestao; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sugestao (id, descricao) FROM stdin;
\.
COPY public.sugestao (id, descricao) FROM '$$PATH$$/3032.dat';

--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.usuario (id, email, senha) FROM stdin;
\.
COPY public.usuario (id, email, senha) FROM '$$PATH$$/3028.dat';

--
-- Name: avaliacao_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.avaliacao_id_seq', 6, true);


--
-- Name: consulta_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.consulta_id_seq', 34, true);


--
-- Name: especializacao_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.especializacao_id_seq', 19, true);


--
-- Name: sugestao_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sugestao_id_seq', 6, true);


--
-- Name: usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.usuario_id_seq', 1, true);


--
-- Name: avaliacao avaliacao_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.avaliacao
    ADD CONSTRAINT avaliacao_pkey PRIMARY KEY (id);


--
-- Name: consulta consulta_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.consulta
    ADD CONSTRAINT consulta_pkey PRIMARY KEY (id);


--
-- Name: especializacao especializacao_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.especializacao
    ADD CONSTRAINT especializacao_pkey PRIMARY KEY (id);


--
-- Name: sugestao sugestao_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sugestao
    ADD CONSTRAINT sugestao_pkey PRIMARY KEY (id);


--
-- Name: usuario usuario_email_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_email_key UNIQUE (email);


--
-- Name: usuario usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id);


--
-- Name: consulta consulta_especializacao_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.consulta
    ADD CONSTRAINT consulta_especializacao_id_fkey FOREIGN KEY (especializacao_id) REFERENCES public.especializacao(id);


--
-- PostgreSQL database dump complete
--

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       