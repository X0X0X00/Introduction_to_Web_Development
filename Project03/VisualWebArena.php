<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zhenhao Zhang, CSC 170 Project 3</title>
    <link rel="stylesheet" href="css/style.css">    
</head>
<bod>
<div class="container">

    <header class="site-header">
        <div class="banner-content">
            <img src="images/logo.jpg" alt="Website Logo" class="logo">
            <div class="text-group">
            <h1 class="site-title">Zhenhao Zhang </h1>
            <p class="site-tagline">CSC 170 - Web Design and Development</p>
            </div>
        </div>

    



        <nav class="menu">
            <ul>
                <li>
                    <a href="index.php" title="Homepage">Home Page</a>
                </li>
                <li>
                    <a href="Star_Wars.php" title="Star Wars">Star Wars</a>
                </li>
                <li>
                    <a href="VisualWebArena.php" title="VisualWebArena">VisualWebArena</a>
                </li>
                <li>
                    <a href="Breaking_Bad.php" title="Breaking Bad">Breaking Bad</a>
                </li>
                <li>
                    <a href="Los_Angeles.php" title="Los Angeles">Los Angeles</a>
                </li>
            </ul>
        </nav>
    </header>




<main>
    <h1>VisualWebArena: Evaluating Multimodal Agents on Realistic Visually Grounded Web Tasks</h1>

    <section>
        <ul class="article-ul">
            <li><a href="#abstract">Abstract</a></li>
            <li><a href="#1Introduction">1 Introduction</a></li>
            <li><a href="#2RelatedWork">2 Related Work</a></li>
            <li><a href="#Table1">Table 1</a></li>
            <li><a href="#3VisualWebArenaEnvironment">3 VisualWebArena Environment</a></li>
            <li><a href="#7Conclusion">7 Conclusion</a></li>
        </ul>
    </section>

    <section class="grid-columns">
        <div>
            <h2 id="abstract">Abstract</h2>
            <p>
                Autonomous agents capable of planning, reasoning,
                and executing actions on the web offer
                a promising avenue for automating computer
                tasks. However, the majority of existing bench-
                marks primarily focus on text-based agents, ne-
                glecting many natural tasks that require visual
                information to effectively solve. Given that
                most computer interfaces cater to human per-
                ception, visual information often augments tex-
                tual data in ways that text-only models strug-
                gle to harness effectively. To bridge this gap,
                we introduce VisualWebArena, a benchmark
                designed to assess the performance of multi-
                modal agents on realistic visually grounded
                web tasks. VisualWebArena comprises of di-
                verse and complex web-based tasks that eval-
                uate various capabilities of autonomous multimodal
                agents. To perform well, agents need to
                accurately process image-text inputs, interpret
                natural language instructions, and execute actions
                on websites to accomplish user-defined
                objectives. We evaluate state-of-the-art LLM-
                based autonomous agents, including several
                multimodal agents. Our analysis reveals several
                limitations of text-based LLM agents, gaps in
                the capabilities of state-of-the-art multimodal
                language agents, and insights towards building
                stronger autonomous agents for the web.
            </p>
        </div>

        <div>
            <h2 id="1Introduction"> 1 Introduction </h2>
            <p>
                Automating routine computer tasks with au-
                tonomous agents is a long standing goal of arti-
                ficial intelligence research (Franklin and Graesser,
                1996; Jennings et al., 1998). To achieve this, we
                need agents that can navigate computers effec-
                tively, process visual and textual inputs, handle
                high-level natural language instructions, and ex-
                ecute actions to achieve desired goals. As digi-
                tal interfaces today are primarily built for human
                eyes, effective visual understanding is necessary
                for many routine computer tasks. For example, hu-
                mans frequently perform tasks on the web which
                involve visual references, such as “Help me order
                a green polo shirt from Amazon,” or rely on pic-
                tures rather than text to communicate. However,
                many agent benchmarks today focus on text-based
                tasks, neglecting the evaluation (and consequently
                the development) of multimodal agents. To address
                this gap, we propose VisualWebArena (Fig. 1), a
                benchmark suite designed to rigorously assess and
                advance the visual and textual capabilities of au-
                tonomous agents. VisualWebArenabuilds off the
                WebArena (Zhou et al., 2024) framework, lever-
                aging reproducible self-hosted environments and
                execution-based evaluations. VisualWebArena in-
                troduces a set of unique tasks that emphasize in-
                tegrating visual understanding with language pro-
                cessing, closely simulating human interaction with
                modern computing interfaces. Our contributions
                are summarized as follows:
            </p>
            <ol>
                <li>
                    We introduce VisualWebArena, a set of 910
                    realistic tasks over three diverse web envi-
                    ronments: Classifieds, Shopping, and Reddit.
                    The Classifieds environment is a new contribu-
                    tion with real world data, while the Shopping
                    and Reddit environments are inherited from
                    WebArena. All tasks we introduce are visually
                    grounded, and require visual understanding of
                    webpage content to effectively solve (while
                    WebArena does not). 25.2% of the tasks also
                    include images as input (Fig. 1), and require
                    understanding interleaved image-text inputs.
                </li>
                <li>
                    We extensively benchmark the autonomous
                    capabilities of state-of-the-art (SOTA) large
                    language models (LLM) and vision-language
                    models (VLMs), demonstrating that strong
                    VLMs outperform text-based LLMs. The best
                    VLM agents achieve a success rate of 16.4%
                    on VisualWebArena, which is still signifi-
                    cantly below human performance of 88.7%.
                </li>
                <li>
                    We propose a new VLM agent inspired by
                    Set-of-Marks prompting (Yang et al., 2023a),
                    simplifying the action space of the model.
                    We show that this model substantially outper-
                    forms other baseline LLM agents, especially
                    on sites that are more visually complex.
                </li>
            </ol>
            <figure>
                <img src="images/image_1.png" alt= "Figure 1" class="img-auto">
                <figcaption>Figure 1: VisualWebArena is a benchmark suite of 910 realistic, visually grounded tasks on self-hosted web
                    environments that involve web navigation and visual understanding</figcaption>
            </figure>
        </div>

        <div>
            <h2 id="2RelatedWork"> 2 Related Work </h2>
            <p>
                <strong> Language-Guided Web Agent Benchmarks </strong>
                The development of reproducible environments for
                autonomous agents has seen considerable progress
                in recent years. Earlier efforts introduced rein-
                forcement learning environments (Brockman et al.,
                2016), and extended into web domains (Shi et al.,
                2017; Liu et al., 2018). Recent web agent bench-
                marks introduced tasks involving actions on static
                internet pages (Deng et al., 2023) as well as inter-
                action in simulated web environments (Yao et al.,
                2022; Zhou et al., 2024). AgentBench (Liu et al.,
                2023c) extends the scope of agents for computer in-
                teraction beyond the web, exploring database man-
                agement and operating system functionalities.
            </p>
            <p>
                <strong> LLM Agents </strong>There has been significant re-
                cent interest in using Large Language Models
                (LLMs) for developing autonomous agents (Xi
                et al., 2023; Wang et al., 2023a). State-of-the-art
                LLMs (Google, 2023; OpenAI, 2023; Chowdhery
                et al., 2023; Rae et al., 2021; Zhang et al., 2022;
                Touvron et al., 2023a,b; Jiang et al., 2023, 2024)
                based on the Transformer (Vaswani et al., 2017)
                architecture have demonstrated impressive abilities
                in learning from in-context examples (Brown et al.,
                2020; Chan et al., 2022), reasoning (Wei et al.,
                2022; Yao et al., 2023; Wang et al., 2023c; Besta
                et al., 2023), following instructions (Chung et al.,
                2022; Longpre et al., 2023; Ouyang et al., 2022),
                and operating over long-context sequences (Tayet
                al., 2021; Bertsch et al., 2023; Tworkowski et al.,
                2023). Several recent works leverage these abilities
                for building autonomous web agents: Kim et al.
                (2023) propose a recursive prompting method to
                improve GPT-4 performance on MiniWoB++ (Liu
                et al., 2018). Liu et al. (2023d) propose a method
                of orchestrating multiple LLM agents to improve
                performance on the WebShop (Yao et al., 2022)
                environment. Zeng et al. (2023) fine-tunes the
                LLaMA-2 models on interaction trajectories with
                instructions, improving over baseline agents.
            </p>
            <p>
                <strong> Vision-Language Models Finally </strong>, our work
                builds off advances in vision-language models
                (VLMs), used for many multimodal tasks such
                as image captioning (Vinyals et al., 2015), visual
                question answering (Antol et al., 2015), and other
                benchmarks (Mialon et al., 2023; Yue et al., 2023;
                Tong et al., 2024). Frozen (Tsimpoukelli et al.,
                2021) was one of the first approaches to demon-
                strate the effectiveness of finetuning a visual en-
                coder to map images into the embedding space
                of a LLM, introducing compelling few-shot mul-
                timodal abilities. Alayrac et al. (2022) introduced
                cross-attention layers and scaled up model sizes
                and training data. Wang et al. (2023b) introduced
                trainable visual expert modules to improve vision-
                language fusion. Liu et al. (2023b) proposed fine-
                tuning on images paired with instructions to im-
                prove text generation performance on several mul-
                timodal tasks. GPT-4V (OpenAI, 2023) introduces
                visual processing to the GPT-4 family of models.
                Gemini (Google, 2023) is multimodal from the
                beginning (in contrast to post-hoc fine-tuned mod-
                els), and can handle text interleaved with visual
                and audio inputs. Several recent work have also
                explored using VLMs to build agents for mobile
                platforms (Zhan and Zhang, 2023; Chu et al., 2023;
                Yang et al., 2023b) and the web (Gur et al., 2023;
                Hong et al., 2023). Zheng et al. (2024) is contempo-
                raneous work which performs action grounding to
                identify appropriate HTML elements for enabling
                agents to execute actions. In contrast, our proposed
                SoM agent uses JavaScript to produce a Set-of-
                Marks (Yang et al., 2023a) for the VLM to directly
                use as an observation and action space.
            </p>
            <section>
                <h4 id = "Table1">Table 1: Set of possible actions A.</h4>
                <table style="border: 1px solid black;">
                    <thead>
                    <tr>
                        <th>Action</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>click [elem]</td>
                        <td>Click on element elem.</td>
                    </tr>
                    <tr>
                        <td>hover [elem]</td>
                        <td>Hover on element elem.</td>
                    </tr>
                    <tr>
                        <td>type [elem] [text]</td>
                        <td>Type text on element elem.</td>
                    </tr>
                    <tr>
                        <td>press [key_comb]</td>
                        <td>Press a key combination.</td>
                    </tr>
                    <tr>
                        <td>new_tab</td>
                        <td>Open a new tab.</td>
                    </tr>
                    <tr>
                        <td>tab_focus [index]</td>
                        <td>Focus on the i-th tab.</td>
                    </tr>
                    <tr>
                        <td>tab_close</td>
                        <td>Close current tab.</td>
                    </tr>
                    <tr>
                        <td>goto [url]</td>
                        <td>Open url.</td>
                    </tr>
                    <tr>
                        <td>go_back</td>
                        <td>Click the back button.</td>
                    </tr>
                    <tr>
                        <td>go_forward</td>
                        <td>Click the forward button.</td>
                    </tr>
                    <tr>
                        <td>scroll [up|down]</td>
                        <td>Scroll up or down the page.</td>
                    </tr>
                    <tr>
                        <td>stop [answer]</td>
                        <td>End the task with an output.</td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </div>

        <div>
            <h2 id="3VisualWebArenaEnvironment"> 3 VisualWebArena Environment </h2>
            <p>
                In order to ensure reproducibility, realism, and de-
                terminism, all websites in the VisualWebArena
                framework are provided as standalone self-hosted
                web applications. The textual and visual content
                are acquired from real world counterparts, while
                the code is based off open-source infrastructure
                commonly used in real websites. We formally de-
                fine the environment, observation space, and action
                space below, but encourage readers to refer to We-
                bArena (Zhou et al., 2024) for more details.
                The environment and agent can be modeled as
                a partially observable Markov decision process
                (POMDP): E= (S, A, Ω, T ), where S represents
                the set of states, A represents the set of actions
                (Sec. 3.2), and Ω represents the set of observations
                (Sec. 3.1). The transition function is defined as
                T : S ×A →S, with deterministic transitions be-
                tween states conditioned on actions. At each time
                step t, the environment is in some state st (e.g., a
                particular page), with a partial observation ot ∈Ω.
                An agent issues an action at ∈A conditioned on
                ot, which results in a new state st+1 ∈S and a new
                partial observation ot+1 ∈Ω of the resulting page.
                The action at may be an action to be executed on
                the webpage (Tab. 1), or it may simply be a string
                output for information seeking tasks (Sec. 3.3).
                Finally, we define the reward function R : S ×
                A →{0, 1}(Sec. 3.3) to measure the success of
                a task execution. In VisualWebArena, the reward
                function returns 1 at the final step if the state transi-
                tions align with the expectations of the task objec-
                tive (i.e., the goal is achieved), and 0 otherwise.
            </p>
            <h3>3.1 Observation Space</h3>
            <p>
                The observation space Ω is modeled after a realis-
                tic web browsing experience. Observations include
                the webpage URLs, opened tabs (possibly multi-
                ple tabs of different websites), and the webpage
                content of the focused tab. In 25.2% of tasks, the
                intent also involves one or more input images (e.g.,
                the first and third tasks in Fig. 1). The webpage
                content can be represented in several ways:
            </p>
            <ol>
                <li>
                    Raw web page HTML as a Document Object
                    Model (DOM) tree, used in previous works
                    on autonomous web agents (Shi et al., 2017;
                    Liu et al., 2018; Deng et al., 2023).
                </li>
                <li>
                    The accessibility tree,1 which provides a struc-
                    tured and simplified representation of the web-
                    page content that is optimized for assistive
                    technologies. This is the primary representa-
                    tion that WebArena (Zhou et al., 2024) uses
                    for its baseline LLM agents.
                </li>
                <li>
                    Web screenshots as RGB arrays, which has
                    demonstrated efficacy in prior work (Gur et al.,
                    2023; Hong et al., 2023; Yan et al., 2023).
                </li>
                <li>
                    We introduce a new visual representation
                    inspired by Set-of-Marks (SoM) prompt-
                    ing (Yang et al., 2023a). For every interactable
                    element on the webpage, we label it with a
                    bounding box and an ID (Fig. 2), producing a
                    screenshot for visual agents to reference ele-
                    ments on the page using their unique ID. We
                    provide more details and analysis in Sec. 5.3.
                </li>
            </ol>
            <h3>3.2 Action Space</h3>
            <p>
                The full set of actions A is summarized in Tab. 1.
                The arguments for action at is the unique element
                ID from the current observation ot. An advantage
                of this representation (over predicting (x, y) coor-
                dinates) is that it allows us to focus on high level
                reasoning rather than low-level control, as many
                SOTA VLMs and LLMs were not explicitly trained
                for referencing elements at such fine granularity.
                For the agents with accessibility tree representa-
                tions, the argument is the element ID in the tree.
                For the SoM representation, we use the unique IDs
                assigned in the current page (see Fig. 2).
            </p>
            <figure>
                <img src="images/image_2.png" alt= "Figure 2" class="img-auto">
                <figcaption>Figure 2: Set-of-Marks (Yang et al., 2023a) augmented webpage screenshot. Every interactable element is
                    highlighted with a bounding box and a unique ID.</figcaption>
            </figure>
            <h3>3.3 Evaluation</h3>
            <p>
                In order to evaluate performance on VisualWebArena, we introduce new visually grounded evaluation metrics to the functional
                evaluation paradigm of WebArena. These allow us to comprehensively evaluate the correctness of execution traces on open ended
                visually grounded tasks. The rewards for each task are hand designed functions using the primitives described below.
            </p>
            <p>
                <strong> Information Seeking Tasks </strong> Information seeking tasks (e.g., the first task in Tab. 2) expect a string output from the model. We adopt similar reward
                functions as WebArena for measuring text correctness against a groundtruth output a*:
            </p>
            <ul>
                <li>
                    <p><b>exact_match:</b> This can be defined as 1{ˆa=a*}. Only outputs that are exactly equal to the groundtruth are given
                        a score of 1. This is used in tasks where an exact response (e.g., a numerical answer) is expected.</p>
                </li>
                <li>
                    <p><b>must_include:</b> This reward function gives a score of 1 if all elements in a* are contained in ˆa and 0 otherwise.
                        For example, if ˆa = "$1.99, $2.50, $10.00" and a* = {"1.99", "2.50", "10.00"}, the task is awarded a score of 1 as all
                        expected elements are present in the output. This is primarily used in tasks where we expect an unordered list of outputs,
                        or we expect text output to contain a particular keyword.</p>
                </li>
                <li>
                    <p><b>fuzzy_match:</b> This function queries a LLM (GPT-4-Turbo in our implementation) to evaluate whether a* and ˆa are
                        semantically equal. The LLM is prompted to output "correct", "incorrect", or "partially correct", and we assign a reward
                        of 1 if the output is "correct". This evaluation is useful for more open ended settings where we are only concerned with
                        semantic rather than exact equivalence, such as asking the user to add a comment describing an image.</p>
                </li>
                <li>
                    <p><b>must_exclude:</b> We introduce this function, which is the converse of must_include. A reward of 0 is assigned if any
                        element from a set a* is found in ˆa (and 1 otherwise). For instance, if ˆa = "$1.99, $2.50, $10.00" and a* = {"1.50",
                        "2.00"}, the reward is 1 as none of the prohibited elements are in the output.</p>
                </li>
            </ul>


            <p>
                In addition, we also introduce several new visual functions for measuring open ended tasks:
            </p>

            <ul>
                <li>
                    <p><b>eval_vqa:</b> Similar to fuzzy_match, this function queries a VLM capable of performing visual question answering
                        (VQA). We use BLIP-2-T5XL in our implementation. We query the VLM with an image and a question. If the output of the
                        VLM contains the groundtruth answer a*, a reward of 1 is assigned. This is useful for evaluating more open ended tasks,
                        e.g., "Buy me a green hoodie under $10.". There are many possible products that satisfy this objective, and it would be
                        infeasible to enumerate all their IDs.</p>
                </li>
                <li>
                    <p><b>eval_fuzzy_image_match:</b> This function checks whether a query image is similar to a groundtruth image according to
                        the structural similarity index measure (SSIM). If the SSIM between the query and groundtruth images is higher than a
                        threshold t ∈[0, 1], a reward of 1 is assigned.</p>
                </li>
            </ul>

            <p>
                <strong> Navigation and Actions</strong>
                Many tasks in VisualWebArena require navigating through multiple webpages, and executing actions to change the underlying state s
                of the environment. To accurately evaluate certain objectives, we require reward functions that examine the final webpage state to
                determine whether the task was successfully accomplished. Each evaluator consists of a locator as well as a URL. The URL can be a
                specific page, or a function (e.g., the last page that the agent navigated to). The locator describes the object on the page that
                should be examined (e.g., all img elements, or all elements with the .product-image-photo class). During evaluation, we use the locator
                to retrieve the corresponding image or text content, and reuse the functions from the information seeking tasks to check for correctness.
            </p>
        </div>

        <div>
            <h2> 4 Curating Visually Grounded Tasks </h2>
            <h3>4.1 Web Environments</h3>
            <p>
                VisualWebArena is designed around three realistic web environments that involve visually rich content.
                Several tasks require referencing information from a self-hosted Wikipedia knowledge base, and others involve interacting across more
                than one website.
            </p>
            <p>
                <strong>Classifieds</strong>
                We introduce a new Classifieds website in VisualWebArena, inspired by real world marketplaces such as Craigslist and Facebook Marketplace.
                The Classifieds site contains 65,955 listings and provides a distinct environment compared to existing ones in WebArena, introducing visually
                grounded tasks centered around user interactions typical in classifieds websites (posting, searching, commenting). The site's infrastructure
                uses OSClass, a robust open-source Content Management System (CMS) designed for classifieds ads, used in multiple real world sites. OSClass
                enables functions such as search, posting, commenting, and leaving reviews and ratings.</p>
            <p>
                <strong>Shopping </strong>
                The Shopping site follows the e-commerce environment from WebArena (Zhou et al., 2024), with product information and content scraped from
                Amazon and released in WebShop (Yao et al., 2022). Visual understanding of product images is required for successfully navigating and
                completing tasks on e-commerce platforms, making this a natural choice for VisualWebArena.
            </p>
            <p>
                <strong> Reddit </strong> The Reddit site also follows the same en-
                vironment from WebArena, and represents a social
                forum platform. The site contains 31,464 posts
                containing a diverse set of images across differ-
                ent subreddits and forums, such as natural images,
                memes, consumer electronics, and charts.
            </p>

            <h3>4.2 Tasks</h3>
            <p>
                <strong>Task Creation</strong>
                We introduce a set of 910 new tasks, split across the three sites detailed earlier. We focus on curating realistic visually grounded tasks, following a similar process as task creation in WebArena. We start by having 6 graduate students (co-authors of this paper) write intent templates (e.g., "Find me the {{attribute}} {{item}}. It should be between {{range}}."), which can be manually expanded by the annotator to form multiple tasks (e.g., "Find me the cheapest red Toyota. It should be between $3000 to $6000.").</p>
            <p>
                We encouraged the annotators to be creative, and make use of the visual layouts of the websites, input images, and cross-site functionalities to develop creative and realistic tasks. When tasks include input images, these were sourced from royalty-free, attribution-free sources and MS-COCO (Lin et al., 2014). Annotators also wrote the reward functions using the primitives described in Sec. 3.3. We collected a total of 314 unique templates (average of 2.9 tasks per template).</p>
            <p>
                <strong>Visually Grounded Tasks</strong>
                A key aspect of VisualWebArena is the inherent visual grounding of all tasks. Each task demands visual understanding, requiring agents to process and interpret visual information rather than relying solely on textual or HTML-based cues. This aligns closely with modern human-computer interfaces, where visual information (e.g., icons, colors) is often critical.</p>
            <p>
                <strong>  Task Complexity</strong>
                classify each task into three difficulty levels: easy, medium, and hard. This classification is particularly useful for assessing performance across a spectrum of agents, ranging from smaller models to state-of-the-art LLMs and VLMs.</p>
            <h3>4.3 Human Performance</h3>
            <p>We measure the success rate of 7 college students on VisualWebArena tasks. Several of these students also assisted with task creation, and to avoid data leakage, we ensured that they were not assigned to the same tasks that they initially created.</p>

        </div>

        <div>
            <h2>5 Baselines</h2>
            <p>We run several baselines to benchmark the performance of state-of-the-art LLM and VLM agents. All models are prompt-based and provided with 3 in-context examples (one from each environment), which share no overlap with the benchmark tasks.</p>

            <table style="border: 1px solid black;"  class="table1">
                <caption>Table 4: Success rate (SR) of GPT-4V (SoM) across different types of tasks.</caption>
                <thead>
                <tr>
                    <th>Task Subset</th>
                    <th>% of Total</th>
                    <th>SR (↑)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>OCR required</td>
                    <td>17.1%</td>
                    <td>13.4%</td>
                </tr>
                <tr>
                    <td>No OCR required</td>
                    <td>82.9%</td>
                    <td>16.9%</td>
                </tr>
                <tr>
                    <td>Exact image match</td>
                    <td>8.7%</td>
                    <td>18.9%</td>
                </tr>
                <tr>
                    <td>No exact image match</td>
                    <td>91.3%</td>
                    <td>16.2%</td>
                </tr>
                <tr>
                    <td>Image inputs</td>
                    <td>25.2%</td>
                    <td>19.0%</td>
                </tr>
                <tr>
                    <td>No image inputs</td>
                    <td>74.8%</td>
                    <td>14.9%</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div>
            <h2>6 Results and Analysis</h2>
            <p>Our main baseline results are summarized in Tab. 3. All existing models substantially underperform compared to humans, which indicate significant headroom in VisualWebArena for future work.</p>

            <p>
                Text-based LLMs Perform Poorly State-of-the-
                art text-only LLMs generally achieve poor results,
                with the best model (GPT-4) achieving an over-
                all success rate of 7.25%. When we augment the
                LLMs with captions, this considerably improves
                success rate (7.25% to 12.75% for GPT-4).
                Multimodality Helps Using multimodal agents
                significantly improves the success rate: GPT-4V
                (gpt-4-1106-vision-preview) achieves an over-
                all success rate of 15.05%, substantially improving
            </p>
            <p>
                over the text-only agents. Gemini-Pro also expe-
                riences a significant uplift in success rate, from
                3.85% (caption-augmented) to 6.04% (multimodal).
                Text-based agents may be limited in their ability
                to process complex images (e.g., those that require
                OCR or recognition of non-salient objects).
            </p>
            <p>
                <strong>SoM Improves Navigability</strong>
                We observe that
                the SoM representation (Sec. 5.3) further im-
                proves the performance of GPT-4V over using
                the accessibility tree, boosting overall success rate
                (15.05% →16.37%). We observe particularly sub-
                stantial improvements on Classifieds and Reddit,
                from 12.38% →17.14% and 8.12% →9.83% re-
                spectively. We attribute this to the Classifieds and
                Reddit websites containing denser visual content.
                These websites often contain multiple smaller sized
                images that are arranged very closely (Fig. 2). In
                many of these pages, the accessibility tree does not
                provide sufficient information to disentangle ele-
                ments that are spatially close. We hypothesize that
                the SoM representation is superior for strong VLM
                agents, which can more accurately disentangle and
                click on the desired elements. For the other VLMs,
                SoM does not significantly improve success, which
                we attribute to the finding from Yang et al. (2023a)
                that only GPT-4V demonstrates the SoM grounding
                ability (perhaps due to scale or training data).
            </p>
            <p>
                One GPT-4V + SoM execution trajectory that
                we found particularly compelling was Reddit task
                #139, which requires exact image matching to find
                a post and block a user (Fig. 3). The model ini-
                tially attempts to search for the correct forum, and
                when this fails it navigates to the list of forums. Af-
                ter navigating correctly to /f/memes, it identifies
                the offending image out of the many images on
                the page (Step 3 in Fig. 3) and blocks the author
                successfully without any unnecessary actions.
            </p>
        </div>

        <div>
            <h2 id="7Conclusion">7 Conclusion</h2>
            <p>
                In this work, we introduced VisualWebArena,
                a benchmark of realistic tasks designed to
                rigorously evaluate and advance the capabil-
                ities of autonomous multimodal web agents.
                VisualWebArena represents a significant step to-
                wards addressing the gap in the evaluation of multi-
                modal agents on visually grounded tasks. We also
                introduce a visual agent inspired by Set-of-Marks
                prompting, and demonstrate the potential of this ap-
                proach for simplifying action spaces and improving
                performance on visually complex websites. Our
                extensive evaluation of state-of-the-art LLM and
                VLM agents demonstrate that while VLMs show
                promise, there remains a considerable performance
                gap compared to humans, who achieve very high
                success rates on VisualWebArena. Our quantita-
                tive and qualitative analysis also highlights several
                common failure modes of existing LLM and VLM
                agents. We expect future work on improving the
                reasoning, visual understanding, and planning abili-
                ties of agents to be particularly exciting directions.
            </p>
        </div>

        <div>
            <h2>8 Ethical and Broader Impacts</h2>
            <p>
                Real World Impacts Advancing the capabilities
                of autonomous agents comes with many broader
                considerations and ethical implications. Strong au-
                tonomous agents have the potential to improve the
                accessibility of computer-based tasks, potentially
                aiding individuals with disabilities or those lack-
                ing technical skills. More broadly, agents have
                the potential to automate large portions of routine
                computer work. While the capabilities of existing
                autonomous agents are insufficient for even sim-
                ple tasks (as shown in this paper), these impacts
                highlight the need to ensure that the broader eco-
                nomic and social implications on employment are
                carefully considered if/when autonomous agents
                are deployed in real world applications.
                Bias and Safety When developing autonomous
                agents, it is also imperative to ensure that these
                agents do not inadvertently exclude or disadvantage
                any group. Further analysis is essential to ensure
                that deployed agents do not exhibit unintended bi-
                ases. Agents also have the potential to cause more
                harm (than regular LLMs) in real world applica-
                tions if careful safeguards are not in place. Further
                research is necessary to understand and mitigate
                possible harmful behaviors.
                Intended Uses VisualWebArena is a research
                benchmark to measure and evaluate the progress
                of multimodal agents. It is primarily meant to act
                as a self-contained sandbox environment for safely
                building robust agents. The models we presented in
                this paper are research prototypes, and not intended
                for deployment in practical applications in their
                current state (especially in high risk domains).
            </p>
        </div>
    </section>
    <section>
        <h2> Citation </h2>
        <p>1: <a href="https://arxiv.org/abs/2401.13649">arxiv</a></p>
        <p>2: <a href="https://aclanthology.org/2024.acl-long.50/">ACL Anthology</a></p>
    </section>
</main>

<footer>

    <p class="copyright">
        <a href="https://betaweb.csug.rochester.edu/~zzh133/project2/index.html" title="Zhenhao Zhang">
            Original Page
        </a>
    </p>
</footer>

<footer>
        <p>&copy; Zhenhao Zhang - CSC 170 Web Design and Development</p>
</footer>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/menu-highlighter.js"></script>

<input type="hidden" name="myEmail" value="zzh133@u.rochester.edu">
    <input type="hidden" name="myAnimal" value="Mango">

</body>
</html>